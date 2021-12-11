(function($) {
    "use strict";

    // Script for OffCanvas Menu Activation
    $(document).ready(function() {
        $('.toggle-bar').on('click', function() {
            $('.off-canvas-menu-wrap, .off-canvas-overlay').addClass('active');
        })

        $('.cls-off-canvas-menu').on('click', function() {
            $('.off-canvas-menu-wrap, .off-canvas-overlay').removeClass('active');
        })
    })



    // Script for Nice Select Activation 
    $(document).ready(function() {
        $('.sl-select').niceSelect();
    })


    // Script for Magnific Popup Activation 
    $(document).ready(function() {
        $('.iframe-link').magnificPopup({ type: 'iframe' });
    });

    window.addEventListener('load', function() {
        document.querySelectorAll('.input-inside input').forEach(function(each) {
            each.value = "";
        })
    })

    // Script for Form Validation
    function alphanumeric(data) {
        let letters = /^[0-9a-zA-Z ]+$/;
        console.log(data)

        if (letters.test(data)) {
            return true;
        }
        return false;
    }

    function validateEmail(data) {
        let testData = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        if (testData.test(data)) {
            return true;
        }
        return (false)
    }

    function isNumeric(num) {
        return !isNaN(num)
    }
    function isPhoneNumeric(data) {
        let testData = /^\+?([0-9]{3})\)?([0-9]{4})?([0-9]{4})$/;
        if (testData.test(data)) {
            return true;
        }
        return (false)
    }
    if (document.getElementById('hero-form') !== null) {

        let nameField = false;
        let emailField = false;
        let phoneField = false;

        // For name field
        // document.getElementById('name').onblur = function() {
        //     let status = document.getElementById('name').value;
        //     if (status.length) {
        //         this.parentElement.classList.add('inputted')
        //         this.parentElement.classList.remove('invalid-field')
        //         nameField = true;
        //     }
        //     if (status.length < 0) {
        //         this.parentElement.classList.add('invalid-field');
        //         nameField = false;
        //     } else if (status == '') {
        //         this.parentElement.classList.add('invalid-field');
        //         nameField = false;
        //     } else {
        //         this.classList.remove('invalid-field');
        //     }
        // }

        document.getElementById('name').onblur = function() {
            let status = document.getElementById('name').value;
            if (status.length) {
                this.parentElement.classList.add('inputted')
                this.parentElement.classList.remove('invalid-field')
            }
            if (status.length < 0) {
                this.parentElement.classList.add('invalid-field');
            } else if (!alphanumeric(status)) {
                this.parentElement.classList.add('invalid-field');
            } else {
                this.classList.remove('invalid-field');
            }
        }

        document.getElementById('name').onfocus = function() {
            let status = document.getElementById('name').value;
            if (status.length) {
                this.parentElement.classList.remove('inputted')
                this.parentElement.classList.remove('invalid-field')
            }
        }



        // For Email field
        document.getElementById('email').onblur = function() {
            let status = document.getElementById('email').value;
            if (status.length) {
                this.parentElement.classList.add('inputted')
                this.parentElement.classList.remove('invalid-field')
                emailField = true;
            }
            if (status.length < 0) {
                this.parentElement.classList.add('invalid-field');
                emailField = false;
            } else if (!validateEmail(status)) {
                this.parentElement.classList.add('invalid-email');
                this.parentElement.classList.add('invalid-field');
                emailField = false;
            } else {
                this.classList.remove('invalid-field');
            }
        }

        document.getElementById('email').onfocus = function() {
            let status = document.getElementById('email').value;
            if (status.length) {
                this.parentElement.classList.remove('inputted')
                this.parentElement.classList.remove('invalid-field')
            }
        }



        // For Phone field
        // document.getElementById('phone').onblur = function() {
        //     let status = document.getElementById('phone').value;
        //     if (status.length) {
        //         this.parentElement.classList.add('inputted')
        //         this.parentElement.classList.remove('invalid-field')
        //     } else {
        //         this.parentElement.classList.add('invalid-field');
        //     }
        //     if (status.length < 0) {
        //         this.parentElement.classList.add('invalid-field');
        //     } else if (status == '') {
        //         this.parentElement.classList.add('invalid-field');
        //     } else {
        //         this.classList.remove('invalid-field');
        //     }
        // }

        document.getElementById('phone').onblur = function() {
            let status = document.getElementById('phone').value;
            if (status.length) {
                this.parentElement.classList.add('inputted')
                this.parentElement.classList.remove('invalid-field')
            } else {
                this.parentElement.classList.add('invalid-field');
            }
            if (status.length < 0) {
                this.parentElement.classList.add('invalid-field');
            } else if (!isNumeric(status)) {
                this.parentElement.classList.add('invalid-phone');
                this.parentElement.classList.add('invalid-field');
            } else {
                this.classList.remove('invalid-field');
            }
        }

        document.getElementById('phone').onfocus = function() {
            let status = document.getElementById('phone').value;
            if (status.length) {
                this.parentElement.classList.remove('inputted')
                this.parentElement.classList.remove('invalid-field')
            }
        }


        // For Company field
        document.getElementById('company').onblur = function() {
            let status = document.getElementById('company').value;
            if (status.length) {
                this.parentElement.classList.add('inputted')
                this.parentElement.classList.remove('invalid-field')
            }
            if (status.length < 0) {
                this.parentElement.classList.add('invalid-field');
            } else if (!alphanumeric(status)) {
                this.parentElement.classList.add('invalid-field');
            } else {
                this.classList.remove('invalid-field');
            }
        }

        document.getElementById('company').onfocus = function() {
            let status = document.getElementById('company').value;
            if (status.length) {
                this.parentElement.classList.remove('inputted')
                this.parentElement.classList.remove('invalid-field')
            }
        }



        // For employee field
        document.getElementById('employee').onblur = function() {
            let status = document.getElementById('employee').value;
            if (status.length) {
                this.parentElement.classList.add('inputted')
                this.parentElement.classList.remove('invalid-field')
            } else {
                this.parentElement.classList.add('invalid-field');
            }
            if (status.length < 0) {
                this.parentElement.classList.add('invalid-field');
            } else if (!isNumeric(status)) {
                this.parentElement.classList.add('invalid-phone');
                this.parentElement.classList.add('invalid-field');
            } else {
                this.classList.remove('invalid-field');
            }
        }

        document.getElementById('employee').onfocus = function() {
            let status = document.getElementById('employee').value;
            if (status.length) {
                this.parentElement.classList.remove('inputted')
                this.parentElement.classList.remove('invalid-field')
            }
        }

        document.getElementById('rq-quote').addEventListener('click', function(e) {
            e.preventDefault();
            document.querySelector('.submission-message-wrap').style.display = "flex";
            document.querySelector('.form-inner-field').style.display = "none";
        })
        var input_result = false;
        var select_result = false;
        $("#name, #email, #phone, #company, #employee").on("input", function() { canChangeColor(); });
        var flag1;
        var flag;

        function canChangeColor() {
           
            var can = true;
            $("#name, #email, #phone, #company, #employee").each(function() { if ($(this).val() == '') { can = false; } });
            if (can) {
                $("#flag1").val('1');
                canChangeColor_result()
            } else {
                $("#flag1").val('0');
                canChangeColor_result()

            }
        }
        $("#Interest").change(function() {
            var canSelect = true;
            $("#Interest").each(function() {
                console.log($(this).val())
                if ($(this).val() == '') { canSelect = false; }
            });
            if (canSelect) {
                $("#flag2").val('1');
                canChangeColor_result()

            } else {
                $("#flag2").val('0');
                canChangeColor_result()
            }
       
        });

        function canChangeColor_result() {
            select_result = $("#flag2").val();
            input_result = $("#flag1").val();
            console.log(select_result+"se")
            console.log(input_result+"in")
            if(select_result == '1' && input_result == '1'){
                $('#rq-quote').removeAttr('disabled');
                $('#rq-quote').css({ background: '#cb2233' });
                $('#rq-quote').addClass('active-btn');
            }else{
                $('#rq-quote').attr('disabled');
                $('#rq-quote').removeClass('active-btn');
                $('#rq-quote').css({ background: '#BBBDC4' });
            }

        }
    }



    // Script For Scroll to top Button
    $(document).ready(function() {
        var back = $('.back-to-top');
        back.on('click', function() {
            $('html, body').animate({
                scrollTop: 0,
            }, 900);
        })
        $(window).on('scroll', function() {
            var self = $(this),
                height = self.height(),
                top = self.scrollTop();
            if (top > height) {
                back.addClass('visible');
            } else {
                back.removeClass('visible');
            }
        })

    })






})(jQuery); // End line