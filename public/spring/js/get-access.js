$(document).ready(function() {

    iziToast.settings({
        timeout: 3000, // default timeout
        resetOnHover: true,
        // icon: '', // icon class
        transitionIn: 'flipInX',
        transitionOut: 'flipOutX',
        position: 'topLeft', // bottomRight, bottomLeft, topRight, topLeft, topCenter, bottomCenter, center
        onOpen: function() {
            //   console.log('callback abriu!');
        },
        onClose: function() {
            //   console.log("callback fech");
        }
    });

    const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000
    });
    $('#getAccessForm').parsley();

    $('#getAccessForm').on('submit', function(event) {
        event.preventDefault();

        if ($('#getAccessForm').parsley().isValid()) {
            let handler = PaystackPop.setup({
                key: 'pk_test_7093b3880aac2c3e0d69a7467f9da060472f2696', // Replace with your public keyS
                // key: 'pk_live_7ea54c15e184ca87a7b7ccc92d5c0330f600d75e', // Replace with your public keyS
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
                    if (response.status == "success") {
                        $.confirm({
                            title: 'Payment Was Successful!',
                            type:"green",
                             content: 'The system is confirming your payment, please hold!',
                             autoClose: 'logoutUser|120000',
                             buttons: {
                                 logoutUser: {
                                     text: "Don't Close!",
                                     action: function () {
                                         $.alert("Action Timed Out, Contact the Administrator");
                                     }
                                 }
                                
                             }
                         });


                         $.ajax({
                            type: "POST",
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr(
                                    'content')
                            },
                            url: "/payment/store",
                            method: "POST",
                            data: $("#getAccessForm").serialize(),
                            dataType: "json",
                            success: function(data) {
    
                                if (data.status == 200) {
                                location.href=`/payment/success/${data.payment_ref}`;
                                }else{
                                    Toast.fire({
                                        // type: 'success',
                                        icon: 'error',
                                        title: "An Error Occured"
                                    });
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
                  

                }
            });

            handler.openIframe();
        }
    });

});


function copyGroupLink() {
    // Get the text field
    var copyText = document.getElementById("GroupLinkInput");

    // Select the text field
    copyText.select();
    copyText.setSelectionRange(0, 99999); // For mobile devices

    // Copy the text inside the text field
    navigator.clipboard.writeText(copyText.value);

    // Alert the copied text
    // alert("Copied the text: " + copyText.value);
    iziToast.success({
        position: "center",
        title: 'Link Copied'
    });
}