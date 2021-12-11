$(document).ready(function() {
    $("#rq-quote").click(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var name = $("#name").val();
        var email = $("#email").val();
        var phone = $("#phone").val();
        var company = $("#company").val();
        var employee = $("#employee").val();
        var Interest = $("#Interest").val();
		var tfn = $("#tfn").val();
        var checkmark = $("#checkmark").val();
        $.ajax({
            method: "POST",
            url: "/RequestQuote",
            data: {
                "name": name,
                "email": email,
                "phone": phone,
                "company": company,
                "employee": employee,
                "Interest": Interest,
				"tfn": tfn,
                "checkmark": checkmark,
            }
        }).done(function(msg) {
            console.log(tfn)

        });
    });
});