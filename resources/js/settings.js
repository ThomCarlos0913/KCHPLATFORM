//////////////////////////////////////////
// Programmed by: John Thomas Carlos
// Copyright © 2020
//////////////////////////////////////////
$(function() {
    $("#profile-upload").on("change", function() {
        $('#selected-file').html(this.files[0]['name']);
    });

    $(".banner-option").click(function(event) {
        for (let counter = 0; counter < 4; counter++) {
            document.getElementsByClassName('banner-option')[counter].classList.remove('banner-selected');
        }
        $("#" + event.target.id).toggleClass('banner-selected');

        switch (event.target.id) {
            case "option1":
                $('#banner-selected').val(1);
                break;
            case "option2":
                $('#banner-selected').val(2);
                break;
            case "option3":
                $('#banner-selected').val(3);
                break;
            case "option4":
                $('#banner-selected').val(4);
                break;
        }
    })
});