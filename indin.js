

  var dnperm = document.getElementById('dnperm');
  var dntrigger= document.getElementById('dntrigger');
  dnperm.addEventListener('click', function(e){
    e.preventDefault();
    if(!window.Notifcation){
      alert('Sorry, notifcations are not supported.');

    }else{
      Notifcation.requestPermission(function(p){
        of(p=='denied'){
          alert('You have denied notifications.');

        }else if (p=='granted'){
          alert('You have granted notifcations');

        }
      });
    }
  });
