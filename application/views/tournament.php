<?php include 'include/header.php';?>
    <?php include 'include/sidebar.php';?>
    <script src="moment.min.js"></script>
<script src="moment-timezone-with-data.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.13.0/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment-timezone/0.5.3/moment-timezone-with-data.min.js"></script>
<div class="content-wrapper">
    <div class="content-header sty-one">
        <h1>Tournament Management</h1> 
    </div>

    <div class="content">
       <div class="card mb-4">
            <div class="card-header mb-4">
               <h5 class="card-title">Add New Tournament</h5>
           </div>
           <div class="card-body">
             <form method="POST"  enctype="multipart/form-data" action="{{url('admin/subscription/submit')}}" >
                 <div class="row mb-4 " style="margin-right: 412px; flex-wrap: nowrap;">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control validate alphanum" type="text" name="tournament" placeholder="Enter Tournament Name">
                                <p class="text-danger" id="tournamentError"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control validate" type="text" name="size" placeholder="Enter Player Size">
                                <p class="text-danger" id="sizeError"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control validate pricevalue" name="price" type="text" placeholder="Enter Winning Price (Token)"> 
                                <p class="text-danger" id="priceError"></p>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4 " style="margin-right: 412px; flex-wrap: nowrap;">
                        <div class="col-md-6">
                            <div class="form-group">
                            <input type="datetime-local" id="start_date" name="startdate" class="form-control validate" >
                                <p class="text-danger" id="startdateError"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                            <input type="datetime-local" id="end_date" name="enddate" class="form-control validate" >
                                <p class="text-danger" id="enddateError"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                               <select class="js-Selector form-control validate js-TimeUtc"></select>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4 " style="margin-right: 412px;">
                       <div class="col-md-12 mt-4">
                            <div class="" >
                                <label><input type="radio" value="0" checked="checked" name="multiselect" id='frsradio'> Free</label>
                            &nbsp;&nbsp;
                                <label><input type="radio" value="1" name="multiselect"  id='expradio'>Paid</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                            <input type="text" class='txbx form-control validate' name="paid" placeholder="Enter Paid Amount" hidden="true"/>
                                <p class="text-danger" id="paidError"></p>
                            </div>
                        </div>
                        
                    </div>
                    <div class="row mt-4" style="margin-right: 5px;">
                        <div class="col-md-10">
                            <div class="form-group">
                                <textarea class="form-control validate" cols="6" rows="6" cols="3" maxlength="250" name="description" rows="3" placeholder="Add description"></textarea>
                                <p class="text-danger" id="descriptionError"></p>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4 ">
                        <div class="col-md-12 text-center"> 
                            <button type="button" onclick="validate(this);" class="mybtns">Submit</button>
                        </div>
                    </div>
             </form> 
         </div>
       </div>

        <div class="card mb-4">
            <div class="card-header mb-4">
                <h5 class="card-title">Tournament List</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example1" class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Sr. No.</th>
                                <th> Tournament Name</th>
                                <th>Player Size</th>
                                <th>Free/Paid</th>
                                <th>Winning Prize</th>
                                <th>Start Date Time</th>  
                                <th>End Date Time</th> 
                                <th>Description</th> 
                                <th>Status</th> 
                                <th>Action</th> 
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>chess</td>
                                <td>2</td>
                                <td>free</td>
                                <td></td>
                                <td>2/1/2022 02:00</td>
                                <td>2/1/2022 02:00</td>
                                <td>dummy data</td>
                                <td> <div class="mytoggle">
                                            <label class="switch">
                                             <input type="checkbox" checked=""> <span class="slider round"></span> </label>
                                          </div></td>
                              
                                <td><a href="<?php echo site_url('tournament-detail');?>" class="composemail"><i class="fa fa-eye"></i></a>
                                <a href="#" class="composemail"><i class="fa fa-edit"></i></a>
                            
                              </td> 
                            </tr>
                            <tr>
                            <td>1</td>
                                <td>chess</td>
                                <td>2</td>
                                <td>free</td>
                                <td></td>
                                <td>2/1/2022 02:00</td>
                                <td>2/1/2022 02:00</td>
                                <td>dummy data</td>
                                <td> <div class="mytoggle">
                                            <label class="switch">
                                             <input type="checkbox" checked=""> <span class="slider round"></span> </label>
                                          </div></td>
                              
                                <td><a href="<?php echo site_url('tournament-detail');?>" class="composemail"><i class="fa fa-eye"></i></a>
                                <a href="#" class="composemail"><i class="fa fa-edit"></i></a>
                            
                              </td> 
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>  
    </div>
    <?php include 'include/footer.php';?>
    <script>
        $(function() {
    $('#expradio').click(function() {
        $('.txbx').attr('hidden',false);
    });           
    $('#frsradio').click(function() {
        $('.txbx').attr('hidden',true);
    });
});
    </script>
<script>
  const dateTimeUtc = moment("2017-06-05T19:41:03Z").utc();
document.querySelector(".js-TimeUtc").innerHTML = dateTimeUtc.format("ddd, DD MMM YYYY HH:mm:ss");

const selectorOptions = moment.tz.names()
  .reduce((memo, tz) => {
    memo.push({
      name: tz,
      offset: moment.tz(tz).utcOffset()
    });
    
    return memo;
  }, [])
  .sort((a, b) => {
    return a.offset - b.offset
  })
  .reduce((memo, tz) => {
    const timezone = tz.offset ? moment.tz(tz.name).format('Z') : '';

    return memo.concat(`<option value="${tz.name}">(GMT${timezone}) ${tz.name}</option>`);
  }, "");

document.querySelector(".js-Selector").innerHTML = selectorOptions;

document.querySelector(".js-Selector").addEventListener("change", e => {
  const timestamp = dateTimeUtc.unix();
  const offset = moment.tz(e.target.value).utcOffset() * 60;
  const dateTimeLocal = moment.unix(timestamp + offset).utc();

  document.querySelector(".js-TimeLocal").innerHTML = dateTimeLocal.format("ddd, DD MMM YYYY HH:mm:ss");
});

document.querySelector(".js-Selector").value = "Europe/Madrid";

const event = new Event("change");
document.querySelector(".js-Selector").dispatchEvent(event);




</script>