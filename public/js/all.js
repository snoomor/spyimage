$( document ).ready(function() {
    data = JSON.parse($('[name="data"]').val());
    topic_players = JSON.parse($('[name="topic_players"]').val());
    current = JSON.parse($('[name="current"]').val());
    leader = JSON.parse($('[name="leader"]').val());
    document.getElementById('name').textContent = data[current];
    document.getElementById('topic').textContent = topic_players[current];

});

function addField() {
    if ($("#photo div").length < 12) {
        var photo = $("div#photo_0").html();

        if ($("#photo div").length == 2) {
            p_id = 1;
        } else {
            p_id = parseInt($('#photo div').last().attr('id').replace(/[^0-9]/gi, '')) + 1;
        }
        $("div#photo").append(photo);

        $('div#photo').children().last().attr('id', "p_" + p_id);
        $('#p_' + p_id).find('i').attr('onclick', "deleteField(" + p_id + ")");
    } else {
        alert("Не более 10 фото!")
    }

}


function ShowCard() {
    $('.box_holder').toggleClass('show_info');
    $('#topic').removeClass("text-green");
}

function Ok() {
    $('#topic').addClass("text-green");
    $('.box_holder').toggleClass('show_info');
    data = JSON.parse($('[name="data"]').val());
    topic_players = JSON.parse($('[name="topic_players"]').val());
    current = JSON.parse($('[name="current"]').val()) + 1;
    $('[name="current"]').val(current);
    leader = JSON.parse($('[name="leader"]').val());
    if (Object.keys(data).length < current || current == leader){
        if (leader != 1 && current != leader){
            current =  1;
            $('[name="current"]').val(1);
            console.log('here1');
        } else {
            $('[class = "box_holder"]').hide();
            $('.box_holder').toggleClass('show_info');
            $('#endround').removeAttr('hidden');
            if (Object.keys(data).length < leader + 1 ){
                $('[name="leader"]').val(1);
                if (Object.keys(data).length == current) {
                    $('[name="leader"]').val(0);
                }

            } else{
                $('[name="leader"]').val(leader);
            console.log('here4');

            }
        }
    }
    document.getElementById('name').textContent = data[current];
    document.getElementById('topic').textContent = topic_players[current];  
    

}
   
//     data = JSON.stringify({ "current": current });
//        $.ajaxSetup({
//           headers: {
//               'X-CSRF-TOKEN': $('[name="_token"]').val()
//           }
//       });
//        $.ajax({
//           url: window.location.origin + "/showtopicajax",
//           method: 'post',
//           data: data,
//           processData: false,
// 		  contentType: false,
//           dataType : "json",
//     contentType: "application/json; charset=utf-8",
//           success: function(result){
//             console.log(result);
        
//           },
//           error:function(){
//            console.log('error');
//           } 
//         });
//         $('.box_holder').toggleClass('show_info');
// }


function AddPlayer() {
    var name = $("div#name_pattern").html();
    //alert($("#add_name").val());


    if ($("#all_names div").length === 0) {
        id = 1;
    } else {
        id = parseInt($('div#all_names').children().last().attr('id').replace(/[^0-9]/gi, '')) + 1;
    }
    
    if ($('input#add_name').val() == "") {
        $('input#add_name').val('Игрок ' + id);
    }
    $("div#all_names").append(name);

    $('div#all_names').children().last().attr('id', "name_" + id);
    $('div#name_' + id).find('.b-pass').find("input").attr('value', $("#add_name").val());
    $('#name_' + id + ' div').last().attr('onclick', "DelPlayer(" + id + ")");

    $('input#add_name').val('');
}

function DelPlayer(id) {
    var id = '#name_' + id
    $(id).remove();
}

function deleteField(p_id) {
    var id = '#p_' + p_id
    $(id).remove();
    var id = '#p_hid_' + p_id
    $(id).remove();
}

function ShowPopup(id) {
    $('#popup_' + id).show();
    $('.overlay_popup').show();
}

function cancelDW() {
    $('.overlay_popup, .popup').hide();
}

function ShowPass() {
    if ($("input#showpass").hasClass("view")) {
        $("input#showpass").removeClass('view');
        $("input#password").attr('type', 'password');
    } else {
        $("input#showpass").addClass('view');
        $("input#password").removeAttr('type');
    }
}