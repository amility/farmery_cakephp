<div class="modal" id="popupModallocation" role="dialog" aria-labelledby="popupModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" style="max-width: 700px!important;">
        <div class="modal-content">
            <div class="modal-header pb-0 border-bottom-0">
               <b> Please Choose Your City/Area</b>
            </div>
            <div class="modal-body">
                <div class="row m-0">
                    <div class="col-xl-12 col-12">
                        <input type="hidden" class="getcitiesdata" value='<?php print_r($getCities); ?>'>
                        <div style="height: auto;margin-top:0px">
                            <div class="d-flex justify-content-center row" style="cursor: pointer;">
                            <?php foreach(json_decode($getCities,true)["cities"] as $key => $value){?>
                                <div class="col-auto">
                                    <span class='cities' id="<?= $value?>" data-id="<?= $key?>">
                                    <?= $value?>
                                    </span>
                                </div>
                                <?php } ?>
                            </div>

                        </div>
                        <div style="padding: 15px;" class="area">

                            <select class="form-control select2 select2-hidden-accessible" id="area"
                                style="width: 100%;">
                            </select>
                        </div>
                        <div style="padding: 15px;" class="subarea">
                            <select class=" form-control select2 select2-hidden-accessible" id="subarea"
                                style="width: 100%;">
                            </select>
                        </div>

                    </input>
                </div>
            </div>
        </div>
    </div>
</div>