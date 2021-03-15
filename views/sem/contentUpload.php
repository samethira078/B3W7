<div class="bootstrap-wrapper">
    <div class="container">
        <div class="row">
            <div id="uploadNew" class="col-md-12">
              <h1>Upload een nieuw character</h1>
              <form action="model/uploadFile.php" id="formUpload" method="post" enctype="multipart/form-data">
                <label for="fname">Name</label><br>
                <input type="text" id="name" name="name"><br><br>
                <label for="lname">Health</label><br>
                <input type="text" id="health" name="health"><br><br>
                <label for="fname">Attack</label><br>
                <input type="text" id="attack" name="attack"><br><br>
                <label for="lname">Defense</label><br>
                <input type="text" id="defense" name="defense"><br><br>
                <label for="lname">Color</label><br>
                <input type="text" id="Color" name="color"><br><br>
                <label for="myfile">Picture</label><br>
                <input type="file" id="file" name="picture"><br><br>
                <label for="lname">Bio</label><br>
                <textarea rows="4" cols="50" name="comment" form="formUpload"></textarea>
                <input type="submit" name="submit" id="submit" value="Submit">
              </form>
            </div>
        </div>
    </div>
</div>
