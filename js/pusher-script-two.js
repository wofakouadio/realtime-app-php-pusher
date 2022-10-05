$(document).ready(()=>{

  // Pusher.logToConsole = true;

  let pusher = new Pusher('0a5157158ca04fc76c2c', {
      cluster: 'mt1'
    });

    var channel = pusher.subscribe('realtime-app-pp');
    channel.bind('check_submit', function(data) {
      // alert(JSON.parse(data));
      console.log(data)
    });

})