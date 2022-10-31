// input js 
// JavaScript for label effects only
// $(window).load(function(){
//     $(".input-field input").val("");
    
//     $(".input-effect input").focusout(function(){
//         if($(this).val() != ""){
//             $(this).addClass("has-content");
//         }else{
//             $(this).removeClass("has-content");
//         }
//     })
// });


name_box = document.querySelector('.name-input')
email_box = document.querySelector('.email-input')
message_box = document.querySelector('.message-input')


console.log(name_box)
console.log(email_box)
console.log(message_box)


name_input = name_box.getElementsByTagName('input')
name_label = name_box.getElementsByTagName('label')

email_input = email_box.getElementsByTagName('input')
email_label = email_box.getElementsByTagName('label')

message_input = message_box.getElementsByTagName('input')
message_label = message_box.getElementsByTagName('label')


console.log(name_input)
name_input[0].addEventListener('change', function(){
    if (name_input.value != ""){
        name_label[0].style.display = "none"
    }
})

console.log(email_input)
email_input[0].addEventListener('change', function(){
    if (email_input.value != ""){
        email_label[0].style.display = "none"
    }
})


console.log(message_input)
message_input[0].addEventListener('change', function(){
    if (message_input.value != ""){
        message_label[0].style.display = "none"
    }
})