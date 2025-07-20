function openFunction(){
      document.getElementById('sidebar-cont').style.width = "220px";
      document.getElementById('bg-sidenav').style.width = "100%";
  }
  function closeFunction() {
      document.getElementById('sidebar-cont').style.width = "0";
      document.getElementById('bg-sidenav').style.width = "0";
  }
  //
     function validate() {
      var mail;
      mail = document.getElementById("subemail").value;
      var regx = /^([a-zA-z0-9\._]+)@([a-a-zA-Z0-9])+.([a-z]+)(.[a-z]+)?$/
      if (regx.test(mail)) {
      } else {
        document.getElementById("validresult").innerHTML = 'Email Id Is Not Valid ' + mail;
        document.getElementById("validresult").style.display = "block";
      }
    }
    //banner button
    let classic = document.getElementsByClassName('dts-button');
    for (var i=0; i < classic.length; i++) {
      classic[i].addEventListener("click", clickfunc, false);
    }
    function clickfunc(){
      window.open("#","_blank");
    }