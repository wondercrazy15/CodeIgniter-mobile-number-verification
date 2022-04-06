
<?= $this->extend('MasterLayout/mainview') ?>
<?= $this->section('content') ?>

    <h3>Check Mobile Service Provider</h3>
    <form action="/phonenumber/get_carrier" method="post" id="mobilenumform">
        <table class="tblmobilenumber">
            <tr>
                <td>Country Name</td>
                <td>
                    <select name="countrylist" class="form-control" id="countrylist">
                        <option value="select_country">Select Country</option>
                        <?php
                            foreach ($name as $countrylist){
                                echo "<option value='+".$countrylist['calling_code']."'>".$countrylist['country']. " (+".$countrylist['calling_code'].")</option>";
                            }
                        ?>
                    </select>
                </td>
            </tr>

            <tr>
                <td>Phone Number</td>
                <td><input type="text" class="form-data phoneno form-control" name="mno" placeholder="Enter Phone number without country code"> <span id="errmsg"></span></td>
            </tr>

            <tr>
                <td colspan=2><input type="submit" class="form-data form-control" id="btnsubmit" value="SUBMIT"></td>
            </tr>

            <tr>
                <td><input type="text" class="form-data statename form-control" placeholder="State" readonly></td>
                <td><input type="text" class="form-data carrier form-control" placeholder="Carrier" readonly></td>
            </tr>
        </table>
    </form>
<?= $this->endsection() ?>

<?= $this->section('footer') ?>
    <script type="text/javascript">

        jQuery(document).ready(function(){
            $(".phoneno").keypress(function (e) {
                //if the letter is not digit then display error and don't type anything
                if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
                    //display error message
                    $("#errmsg").html("Digits Only").show().fadeOut("slow");
                        return false;
                }
            });
        })


        jQuery(document).on("click","#btnsubmit",function(e){
            e.preventDefault();
            if(jQuery('#countrylist').val() != 'select_country' && jQuery('.phoneno').val() != ''){
                
                var actionurl = $('#mobilenumform').attr('action');
                jQuery.ajax({
                    url: actionurl,
                    type: 'post',
                    ContentType : 'application/json',
                    dataType: 'json',
                    cache: 'false',
                    data: jQuery('#mobilenumform').serialize(),
                    success: function (result) {

                        var carrier = result.carrier;
                        var statename = result.location;
                        var checkvalid = result.valid;
                        // alert (checkvalid);
                        // alert (checkvalid);
                        if(checkvalid){
                            jQuery('.statename').val(statename);
                            jQuery('.carrier').val(carrier);
                        }
                        else{
                            alert("Enter number again");
                        }

                        
                        
                    }
                });
            }
            else{
                alert ("Enter valid number");
            }
        });

    </script>
    <?= $this->endsection() ?>