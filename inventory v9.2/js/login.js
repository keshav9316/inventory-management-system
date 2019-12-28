
function check(){
     var userid=document.getElementById("userid").value;
     var password=document.getElementById("password").value;
     //  document.write(userid +" "+password);
     
     var mysql=require('mysql');

     var con=mysql.createconnection(
          {
               host:"localhost",
               user:"root",
               password:"123456",
               database:"mydb"
          }
     )

     var condition="SELECT userid,password FROM details WHERE userid=" + mysql.escape(userid) + "AND password=" + mysql.escape(password);

     con.connect( function(err) { 
          if (err){
               alert("CONNECTION FAILED....");
               throw err;
          }

          con.query( condition , function(err,result){

               if(err) {
                    alert("Invalid Credentials.......try again!");
                    throw err};
               if(result[0].userid==userid && result[0].password==password)
               window.location.replace("index.html");
          })


     })

     // window.location.replace("index.html");
}