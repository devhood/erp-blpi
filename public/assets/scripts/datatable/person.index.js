var TableEditable = function () {

    return {

        //main function to initiate the module
        init: function () {
            function restoreRow(oTable, nRow) {
                var aData = oTable.fnGetData(nRow);
                var jqTds = $('>td', nRow);

                for (var i = 0, iLen = jqTds.length; i < iLen; i++) {
                    if(aData){
                      oTable.fnUpdate(aData[i], nRow, i, false);
                    }
                    
                }

                oTable.fnDraw();
            }

            function editRow(oTable, nRow) {
                var aData = oTable.fnGetData(nRow);
                var jqTds = $('>td', nRow);
                ajaxGetPersonTypeOptions(function(err,result){
                	var personTypeOption = OptionsToHTML("intpersontypeid","strpersontype",result.data,aData[4]);
                    var activeOption = OptionsToHTML("intactive","stractive",
                               [{intactive:1,stractive:"Active"},
                                {intactive:0,stractive:"Inactive"}],
                               aData[5]);
                    jqTds[0].innerHTML =  aData[0] ;
                    jqTds[1].innerHTML = '<input type="text" class="form-control input-medium" value="' + aData[1] + '">';
                    jqTds[2].innerHTML = '<input type="text" class="form-control input-medium" value="' + aData[2] + '">';
                    jqTds[3].innerHTML = '<input type="text" class="form-control input-medium" value="' + aData[3] + '">';
                    jqTds[4].innerHTML = '<select class="form-control input-small">'+personTypeOption+'</select>';
                    jqTds[5].innerHTML = '<select class="form-control input-small">'+activeOption+'</select>';
                    jqTds[6].innerHTML = '<a class="edit" href="">Save</a>';
                    jqTds[7].innerHTML = '<a class="cancel" href="">Cancel</a>';
                });

                
                
            }

            function saveRow(oTable, nRow,id) {
                var jqTds = $('td', nRow);
                var jqInputs = $('input', nRow);
                var jqSelect = $('select', nRow);
                jqTds[0].innerHTML = id?id:jqTds[0].innerHTML;
                oTable.fnUpdate(jqTds[0].innerHTML, nRow, 0, false);
                oTable.fnUpdate(jqInputs[0].value, nRow, 1, false);
                oTable.fnUpdate(jqInputs[1].value, nRow, 2, false);
                oTable.fnUpdate(jqInputs[2].value, nRow, 3, false); 
                oTable.fnUpdate(jqSelect[0].options[jqSelect[0].selectedIndex].innerHTML, nRow, 4, false);
                oTable.fnUpdate(jqSelect[1].options[jqSelect[1].selectedIndex].innerHTML, nRow, 5, false);
                oTable.fnUpdate('<a class="edit" href="">Edit</a>', nRow, 6, false);
                oTable.fnUpdate('<a class="delete" href="">Delete</a>', nRow, 7, false);
                oTable.fnDraw();
            }

            function cancelEditRow(oTable, nRow) {
                var jqTds = $('td', nRow);
                var jqInputs = $('input', nRow);
                var jqSelect = $('select', nRow);
                jqTds[0].innerHTML = id?id:jqTds[0].innerHTML;
                oTable.fnUpdate(jqTds[0].innerHTML, nRow, 0, false);
                oTable.fnUpdate(jqInputs[0].value, nRow, 1, false);
                oTable.fnUpdate(jqInputs[1].value, nRow, 2, false);
                oTable.fnUpdate(jqInputs[2].value, nRow, 3, false); 
                oTable.fnUpdate(jqSelect[0].options[jqSelect[0].selectedIndex].innerHTML, nRow, 4, false);
                oTable.fnUpdate(jqSelect[1].options[jqSelect[1].selectedIndex].innerHTML, nRow, 5, false);
                oTable.fnUpdate('<a class="edit" href="">Edit</a>', nRow, 6, false);
                oTable.fnUpdate('<a class="delete" href="">Delete</a>', nRow, 7, false);
                oTable.fnDraw();
            }

            var oTable = $('#sample_editable_1').dataTable({
                "aLengthMenu": [
                    [5, 15, 20, -1],
                    [5, 15, 20, "All"] // change per page values here
                ],
                // set the initial value
                "iDisplayLength": 5,
                
                "sPaginationType": "bootstrap",
                "oLanguage": {
                    "sLengthMenu": "_MENU_ records",
                    "oPaginate": {
                        "sPrevious": "Prev",
                        "sNext": "Next"
                    }
                },
                "aoColumnDefs": [{
                        'bSortable': false,
                        'aTargets': [0]
                    }
                ]
            });

            jQuery('#sample_editable_1_wrapper .dataTables_filter input').addClass("form-control input-medium input-inline"); // modify table search input
            jQuery('#sample_editable_1_wrapper .dataTables_length select').addClass("form-control input-small"); // modify table per page dropdown
            jQuery('#sample_editable_1_wrapper .dataTables_length select').select2({
                showSearchInput : false //hide search box with special css class
            }); // initialize select2 dropdown

            var nEditing = null;

            $('#sample_editable_1_new').click(function (e) {
                e.preventDefault();
                var aiNew = oTable.fnAddData(['', '', '', '', '', '',
                        '<a class="edit" href="">Edit</a>', '<a class="cancel new" data-mode="new" href="">Cancel</a>'
                ]);
               
                var nRow = oTable.fnGetNodes(aiNew[0]);
                editRow(oTable, nRow);
                nEditing = nRow;
            });

            $('#sample_editable_1 a.delete').live('click', function (e) {
                e.preventDefault();

                if (confirm("Are you sure to delete this row ?") == false) {
                    return;
                }

                var nRow = $(this).parents('tr')[0];
                oTable.fnDeleteRow(nRow);
                alert("Deleted! Do not forget to do some ajax to sync with backend :)");
            });

            $('#sample_editable_1 a.cancel').live('click', function (e) {
                e.preventDefault();
               var nRow = $(this).parents('tr')[0];
                var jqTds = $('td', nRow);
                if(jqTds[0].innerHTML){
                    restoreRow(oTable, nEditing);
                    nEditing = null;
                   
                }
                else{
                    
                    oTable.fnDeleteRow(nRow);
                }
            });

            $('#sample_editable_1 a.edit').live('click', function (e) {
                e.preventDefault();

                /* Get the row as a parent of the link that was clicked on */
                var nRow = $(this).parents('tr')[0];

                if (nEditing !== null && nEditing != nRow) {
                    /* Currently editing - but not this row - restore the old before continuing to edit mode */
                    restoreRow(oTable, nEditing);
                    editRow(oTable, nRow);
                    nEditing = nRow;
                } else if (nEditing == nRow && this.innerHTML == "Save") {
                    /* Editing this row and want to save it */
                  var jqTds = $('td', nRow);
                	var jqInputs = $('input', nRow);
                  var jqSelects = $('select', nRow);
                	var data = {
              			'strpersonname' : jqInputs[0].value,
                    'strpersonemail' : jqInputs[1].value,
                    'strpersonphone' : jqInputs[2].value,
               			'intpersontypeid' : jqSelects[0].value,
                		'intactive' : jqSelects[1].value
                  };
                  if(jqTds[0].innerHTML){
                       var id  = jqTds[0].innerHTML;
                       ajaxEditPerson(data,id,function(err,result){
                         if(err){
                           alert(err);
                         }
                         else{
                           saveRow(oTable, nEditing,id);
                           nEditing = null;
                         }

                      });
                  }
                  else{
                    ajaxCreatePerson(data,function(err,result){
                      if(err){
                        alert(err);
                      }
                      else{
                        saveRow(oTable, nEditing,result.id);
                        nEditing = null;
                      }
                    	
                    });
                  }
                	
                } else {
                    /* No edit in progress - let's start one */
                    editRow(oTable, nRow);
                    nEditing = nRow;
                }
            });
        }

    };

}();