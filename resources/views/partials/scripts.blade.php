<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap3-dialog/1.34.7/js/bootstrap-dialog.min.js"></script>
<script>
    $(document).ready(function(){
        $('form').submit(function(e){
            e.preventDefault();
            var self = $(this);
            var url = self.attr('action');
            var token = '{!! csrf_token() !!}';
            var tr = self.parent().parent();
            BootstrapDialog.confirm('Are you sure you want to delete?', function(result){
                if(result) {
                    $.ajax({
                        url: url,
                        type: 'POST',
                        data: {_method: 'DELETE', _token: token},
                        success: function(result) {
                            tr.hide();
                            showMessage(result.message)
                        }
                    });
                }
            });
        });
    });
    function showMessage(message){
        var text = '<div class="flash-message">' +
                '<p class="alert alert-success">' + message +'' +
                '<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>' +
                '</p>' +
                '</div>';
        $('.alert').remove();
        $('.alert-zone').children().remove();
        $('.alert-zone').append(text);
    }
</script>