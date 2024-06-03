$(document).ready(function(){

    const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
        });
$('#getAccessForm').parsley();

$('#getAccessForm').on('submit', function(event){
 event.preventDefault();

 if($('#getAccessForm').parsley().isValid())
 {
    let handler = PaystackPop.setup({
                    key: 'pk_live_7ea54c15e184ca87a7b7ccc92d5c0330f600d75e', // Replace with your public keyS
                    email: document.getElementById("email").value,
                    amount: document.getElementById("amount").value * 100,
                    onClose: function() {
                        Toast.fire({
                            // type: 'success',
                            icon: 'error',
                            title: "Payment Cancelled"
                        })
                    },
                    callback: function(response) {
                        //   let message = 'Payment complete! Reference: ' + response.reference;
                        //   alert(message);
                        $("#reference").val(response.reference);
                        $("#status").val(response.status);
                        $("#message").val(response.message);
                        // var formData = new FormData(this);
                        // var all = $(this).serialize();
                      
                     $.ajax({
                            type: "POST",
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            url:"{{ route('paymentAccess') }}",
                            method:"POST",  
                            data:$("#getAccessForm").serialize(),
                            dataType: "json",
                            success: function(data) {
                                    if (data.status == 200) {
                            Toast.fire({
                            // type: 'success',
                            icon: 'success',
                            title: data.msg
                             });
                             $('#getAccessForm')[0].reset();
                            }
                            },
                            error: function(data) {
                          Toast.fire({
                            // type: 'success',
                            icon: 'error',
                            title: data.msg
                             });
                             $('#getAccessForm')[0].reset();

                            }
                        });

                    }
                });

                handler.openIframe();
 }
});

});