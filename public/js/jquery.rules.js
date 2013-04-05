jQuery(document).ready(function($) {

    $('#project').change(function(){
            var idproject = $(this).val();
            alert(idproject);
            if (idproject == 'all') {
                $('#project').html('<option value="all">All Projects</option>')
            } else {
                $.ajax({
                    type: 'POST',
                    data: {id_project: idproject},
                    dataType: 'html',
                    url: 'http://dev.agile/project/',
                    beforeSend: function(){
                        $('#project').html("<option value='all'> - Loading -</option>");
                        $('#project').attr('disabled', 'disabled');
                    },
                    complete: function(){
                    },
                    success: function(infos){
                        $('#project').html(infos);
                        $('#project').removeAttr('disabled');
                    },
                    error: function(XHR){
                        alert('Error: '+ xhr.StatusText);
                    }
                });
            }
        });

});
