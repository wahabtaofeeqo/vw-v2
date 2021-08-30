(function($) {
    $(document).ready(function() {
        
        const loader = (state) => {
            if(state) {
                $.LoadingOverlay("show");
            }
            else {
                $.LoadingOverlay("hide");
            }
        }


        $('.ajaxForm').submit(function(e) {
            e.preventDefault();

            loader(true);

            const form = $(this);
            const data = $(this).serialize();
            const url = $(this).attr('action');

            axios.post(url, data)
                .then(response => {
                    swal('Server Error. Please again')
                    $(form).trigger('reset');
                })
                .catch(e => {
                    swal('Could not process Request. Please Try again')
                })
                .finally(e => {
                    loader(false);
                })
        })
    })
})(jQuery)