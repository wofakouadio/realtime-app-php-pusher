$(document).ready(()=>{

    $("form").on("submit", (e)=>{

        e.preventDefault();

        $.ajax({
            url:'../server/pusher-script.php',
            success: (Response)=>{

              console.log(Response)
            }
        })

    })


})