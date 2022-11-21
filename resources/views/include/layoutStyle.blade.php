<style type="text/css">
  @import url('https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500');

body {
  overflow-x: hidden;
  font-size: 16px;
  background: #fff;

}
#viewport {
  padding-left: 250px;
  -webkit-transition: all 0.5s ease;
  -moz-transition: all 0.5s ease;
  -o-transition: all 0.5s ease;
  transition: all 0.5s ease;
}

#content {
  width: 100%;
  position: relative;
  margin-right: 0;
}

/* Sidebar Styles */

#sidebar {
  z-index: 1000;
  position: fixed;
  left: 250px;
  width: 250px;
  height: 100%;
  margin-left: -250px;
  overflow-y: auto;
  background: #37474F;
  -webkit-transition: all 0.5s ease;
  -moz-transition: all 0.5s ease;
  -o-transition: all 0.5s ease;
  transition: all 0.5s ease;
}

 header {
  background-color: #263238;
  font-size: 20px;
  line-height: 52px;
  text-align: center;
}
.logo{
  color: #263238;
  font-size: 20px;

}

#sidebar header a {
  color: #fff;
  display: block;
  text-decoration: none;


}

#sidebar header a:hover {
  color: #fff;
}

#sidebar .nav{
}

#sidebar .nav li{
  background: none;
  padding: 14px 24px;
  width: 250px;

}

#sidebar .nav a{
  /*background: none;*/
  color: #CFD8DC;
  font-size: 15px;
}
#sidebar .nav a:hover{
  text-decoration-line: none;

}

#sidebar .nav li:hover{
  background:#566162;
  padding: 14px 24px;
  width:250px;

}

#sidebar .nav a i{
  margin-right: 16px;
}

</style>