<style type="text/css">
  body{
      background: #f5f6fa;

  }
  .card-counter{
    margin: 10px;
    padding: 20px 10px;
    background-color: #fff;
    border-radius: 2px;
    transition: .3s linear all;
    height: 100px;
  }

  .card-counter:hover{
    box-shadow: 4px 4px 20px #DADADA;
    transition: .3s linear all;
  }

  .card-counter.primary{
    background-color: #007bff;
    color: #FFF;
  }

  .card-counter.danger{
    background-color: #ef5350;
    color: #FFF;
  }  

  .card-counter.success{
    background-color: #66bb6a;
    color: #FFF;
  }  

  .card-counter.info{
    background-color: #26c6da;
    color: #FFF;
  }  

  .card-counter i{
    font-size: 4em;
    opacity: 0.2;
    margin-left: 10px;

  }

  .card-counter .count-numbers{
    position: absolute;
    right: 40px;
    top: 20px;
    font-size: 28px;
    display: block;
  }

  .card-counter .count-name{
    position: absolute;
    right: 40px;
    top: 65px;
    opacity: 0.5;
    display: block;
    font-size: 16px;
  }
  /*******/
  .add{
   padding: 12px 24px;
   font-size: 14px;
   text-align: center;
   text-decoration: none;
   background: #2ed573;
   border: none;
   color: #f1f1f1;
   border-radius: 4px;
   margin-top: 20px;
   margin-left: 10px;

 }
 .add:hover{
  box-shadow: 2px 2px  10px #7bed9f;
}
.add i{
 margin-right: 10px;
}
.save{
   padding: 12px 24px;
 font-size: 14px;
 text-align: center;
 text-decoration: none;
 background: #0984e3;
 border: 2px;
 color: #f1f1f1;
 border-radius: 4px;
 width: 620px;
 margin-top: 20px;
margin-left: 20px;
}
.save:hover{
  box-shadow: 2px 2px  10px #0684e3;
}

.btnShow{
   padding: 12px 24px;
 font-size: 14px;
 text-align: center;
 text-decoration: none;
 background: #2ed573;
 border: none;
 color: #f1f1f1;
 border-radius: 4px;
 margin-left: 20px;
 margin-top: 20px;
}
.btnShow:hover{
  box-shadow: 2px 2px  10px #7bed9f;
}
.btnShow i{
 margin-right: 10px;
}
.save i{
  margin-right: 5px;
  
}
.action{
 text-align: center;
 text-decoration: none;
 background: none;
 border: none;
 color: white;
 border-radius: 2px;
}
.messageNo{
  margin: 0 auto;
  text-align: center;
}
.message{
  color: #b2bec3;
  font-size: 40px;
}
.contable{
    margin: 10px;
    display: inline-block;
    width: 98.5%;
    counter-reset: row-num;

}
.contable tbody tr{
    counter-increment: row-num;

}
.contable  tbody tr td:first-child::before {
    content: counter(row-num) ". ";
}
.contable table thead{
  background-color: #37474F;
  color: #fff;
}
.contable table thead tr td {
  font-size: 14px;
}
.contable table tbody tr td {
  font-size: 14px;
  color: #263238;
}
label{
    font-size: 14px;
  }

 input:valid {
  border-color:0.5px solid#dfe6e9;
}
input:focus {
  outline: none;
  border-color: 0.5px solid#0984e3; 
}


textarea:valid {
  border-color:0.5px solid #dfe6e9;
}
textarea:focus {
  outline: none;
  border-color: #0984e3; 

}

textarea{
  width: 620px;
  border-radius: 1px;
  border:none;
  padding: 12px;
  border: 0.5px solid #dfe6e9;
  background: #fff;
}

input{
  width: 100%;
  height: 38px;
  border-radius: 1px;
  border:none;
  padding: 12px;
  background: #FFF;
  border: 0.5px solid #dfe6e9;
}

.inputpub{
  width: 300px;
  height: 40px;
  margin: 14px;
  display: inline-block;
  padding: 5px;
}
.file{
    width: 100%;

}
.files{
  width: 100%;
  height: 38px;
  border-radius: 1px;
  border:none;
  padding: 6px;
  background: #FFF;
  border: 0.5px solid #dfe6e9;
}
.date{
  width: 100%;
  height: 38px;
  border-radius: 1px;
  border:none;
  padding: 12px;
  background: #FFF;
  border: 0.5px solid #dfe6e9;

}

::-webkit-input-placeholder{ /* Chrome/Opera/Safari */
  color: #b2bec3;
}

.title{
  color: #37474F;
  font-size: 14px;
  display: inline-block;
  padding: 10px;
}
.formCont{
  padding: 18px;
  margin-left: 20px;
  margin-bottom: 20px;
  background: white;
  border: 1px solid #dfe6e9 ;
  border-radius:2px;
  width: 65%;

}
.tei{
  padding: 10px;
  margin:10px 20px;
  background: white;
  border: 0.5px solid #dfe6e9
  border-radius 5px; 
}
.inputpub label span{
  color: red;
  font-size: 16px;

}
.showimg{
  width: 24px;
  height: 24px;
  border-radius: 50%;
}
.name{
  padding-left: 10px;
}
.btn{
  background-color: #FFF;
  border: 0.5px solid  #dfe6e9;
  border-radius: 1px;

}


/****************************************************/
  input.parsley-success,
  .btn.parsley-success,
  textarea.parsley-success {
    border: 0.5px solid #55efc4;
  }

  input.parsley-error,
  .btn.parsley-error,
  textarea.parsley-error {
    color: #000;
    border: 0.5px solid #f79295;
  }
.errorMessage{
  font-size: 13px;
  color: red;
  text-transform: lowercase;
}
.message-result{
  width: 620px;
  margin: 14px;
}
  .parsley-errors-list {
    margin: 2px 0 3px;
    padding: 0;
    list-style-type: none;
    font-size: 0.9em;
    opacity: 0;
    transition: all .3s ease-in;
    -o-transition: all .3s ease-in;
    -moz-transition: all .3s ease-in;
    -webkit-transition: all .3s ease-in;
  }

  .parsley-errors-list.filled {
    opacity: 1;
  }
  
  .parsley-type, .parsley-required, .parsley-equalto, .parsley-pattern, .parsley-length{
   color:#ff0000;
  }
/* confirmation*/


.modal-confirm {    
  color: #636363;
  width: 400px;
}
.modal-confirm .modal-content {
  padding: 20px;
  border-radius: 5px;
  border: none;
  text-align: center;
  font-size: 14px;
}
.modal-confirm .modal-header {
  border-bottom: none;   
  position: relative;
}
.modal-confirm h4 {
  text-align: center;
  font-size: 26px;
  margin: 30px 0 -10px;
}
.modal-confirm .close {
  position: absolute;
  top: -5px;
  right: -2px;
}
.modal-confirm .modal-body {
  color: #999;
}
.modal-confirm .modal-footer {
  border: none;
  text-align: center;   
  border-radius: 5px;
  font-size: 13px;
  padding: 10px 15px 25px;
}
.modal-confirm .modal-footer a {
  color: #999;
}   
.modal-confirm .icon-box {
  width: 80px;
  height: 80px;
  margin: 0 auto;
  border-radius: 50%;
  z-index: 9;
  text-align: center;
  border: 3px solid #f15e5e;
}
.modal-confirm .icon-box i {
  color: #f15e5e;
  font-size: 46px;
  display: inline-block;
  margin-top: 13px;
}
.modal-confirm .btn, .modal-confirm .btn:active {
  color: #fff;
  border-radius: 4px;
  background: #60c7c1;
  text-decoration: none;
  transition: all 0.4s;
  line-height: normal;
  min-width: 120px;
  border: none;
  min-height: 40px;
  border-radius: 3px;
  margin: 0 5px;
}
.modal-confirm .btn-secondary {
  background: #c1c1c1;
}
.modal-confirm .btn-secondary:hover, .modal-confirm .btn-secondary:focus {
  background: #a8a8a8;
}
.modal-confirm .btn-danger {
  background: #f15e5e;
}
.modal-confirm .btn-danger:hover, .modal-confirm .btn-danger:focus {
  background: #ee3535;
}
.trigger-btn {
  display: inline-block;
  margin: 100px auto;
}
</style>