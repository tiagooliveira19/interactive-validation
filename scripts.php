<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
        integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous"
        referrerpolicy="no-referrer"></script>
<script src="//code.jquery.com/jquery.min.js"></script>
<script src="js/toastr.js"></script>
<script>

    $(document).ready(function () {


        if ('<?php echo $msg; ?>') {

            toastr.success('Sucesso!', '', {
                closeButton: true,
                progressBar: true,
                positionClass: "toast-top-right",
                preventDuplicates: true,
                showDuration: "300",
                showMethod: "fadeIn",
                hideMethod: "fadeOut"
            });
        }

    });

    $(document).delegate("#btn-signin", "mouseenter", function() {

        let senha = $('#senha').val().length;
        let contador = 0;

        if (senha < 8) {

            $('#passHelp').removeClass('hidden').fadeIn('slow');

            if (contador === 0) {
                $(this).animate({"left": "+=75px"}, "slow");
            }

            contador++;

            if (contador === 1) {

                let btnSignIn = $('#btn-signin')[0]['attributes'][3].value.toString(); // Verifica o estilo aplicado
                let left = btnSignIn.includes('left');
                let right = btnSignIn.includes('right');

                if (left) {
                    $(this).animate({"left": "-=150px", "right": "+=75px"}, "slow");
                }

                if (right) {
                    $(this).animate({"right": "-=150px", "left": "+=75px"}, "slow");
                }
            }
        } else {
            $('#btn-signin').css({"right": "0px", "left": "0px", "position": "absolute!important"});
            $('#passHelp').addClass('hidden').fadeOut('slow');
        }

    });

    $(document).delegate("#btn-signin", "mouseout", function() {
        $(this).css({"right": "0px", "left": "0px", "position": "absolute!important"});
    });
</script>
