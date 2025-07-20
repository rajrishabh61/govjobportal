          //sidebarmenu Admin
          document.getElementById("bars").addEventListener('click',function () {
            document.querySelector('.sidebar').style.width = '15rem';
            document.getElementById('bars').style.display = 'none';
            document.getElementById('timess').style.display = 'flex';
         
         });
        
         document.getElementById("timess").addEventListener('click',function () {
            document.querySelector('.sidebar').style.width = '0rem';
            document.getElementById('timess').style.display = 'none';
            document.getElementById('bars').style.display = 'flex';
         });

//sidebaracordion Adminpage

$('.feat-btn').click(function(){
   $('.sidebar ul .feat-show').toggleClass("show");
   $('.sidebar ul .first').toggleClass("rotate");
  });
  $('.serv-btn').click(function(){
   $('.sidebar ul .serv-show').toggleClass("show1");
   $('.sidebar ul .second').toggleClass("rotate");
  });
  $('.three-btn').click(function(){
   $('.sidebar ul .three-show').toggleClass("show2");
   $('.sidebar ul .third').toggleClass("rotate");
  });
  $('.four-btn').click(function(){
   $('.sidebar ul .four-show').toggleClass("show3");
   $('.sidebar ul .fourth').toggleClass("rotate");
  });
  $('.sidebar ul li').click(function(){
   $(this).addClass("active").siblings().removeClass("active");
  });
