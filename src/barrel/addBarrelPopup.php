<!DOCTYPE html>
<style>

    * {
        margin: 0;
        padding: 0;
    }

    .main{
        width: 500px;
        height: 400px;
        border: 6px solid salmon;
    }

    header{
        text-align: center;
        font-size: large;
        font-family: "Apple Braille";
        margin-top: 10px;

    }

    #closebtn{
        width: 15px;
        height: 15px;

    }


</style>
<html>
    <body>
        <div class="main">
            <header>Add Barrel</header>
           <img id="closebtn" src="../image/closeIcon.png" onclick="closePopup()">

            <form action="#">
               <input placeholder="Name" type="text" required />
               <input placeholder="Email" type="email" required />
               <input placeholder="Subject" type="text" required />
               <textarea placeholder="Comment"></textarea>
               <input class="formBtn" type="submit" />
               <input class="formBtn" type="reset" />
            </form>
        </div>
    </body>
</html>



<SCRIPT TYPE="text/javascript" >




    function closePopup() {
//        $('#addBarrelPopup', parent.document).fadeOut();
        window.parent.document.getElementById("addBarrelPopup");
//      parent.document.getElementById("addBarrelPopup");

//        closeAddPopup();


    }



</SCRIPT>