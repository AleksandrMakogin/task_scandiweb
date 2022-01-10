<form action="/" method="POST">

<div class="row">


    <div class="col-md-12">
        <nav class="navbar navbar-light  ">
            <a>
                <div class="text3d-wrap-1">
                    <span class="text3d-1">Product list </span>
                </div>
            </a>
         <div class="row">
             <div class="glow-on-hover m-2" id="btn_v" >
                 <a class="" href="/add">Add</a>
             </div>

             <button class="glow-on-hover m-2" name="delete" type="submit">Mass delete</button>
         </div>


        </nav>
        <div class="col-md-12 ex3">

            <ul class="cards">
                <?php foreach ($data as $d) {?>
                    <li>
                        <a href="" class="card" style="border-radius: 39px">
                            <img src="/images/hurd_disk.jpg" class="card__image" alt="" />

                            <div class="card__overlay">
                                <div class="card__header">
                                    <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>
                                    <img class="card__thumb" src="https://i.imgur.com/sjLMNDM.png" alt="" />

                                        <input type="checkbox" name="check[]"  value="<?=$d['sku']?>" class="myinput large custom" />


                                    <div class="card__header-text">
                                        <h3 class="card__title">disk <?=$d['sku']?> </h3>
                                        <span class="card__status"> Name : <?=$d['name']?> </span>
                                        <div class="card__status"> <span > Size disk : <?=$d['size']?> mb</span> </div>
                                        <div class="card__status"> <span > Price disk : <?=$d['price']?> $</span> </div>
                                    </div>
                                </div>
                                <div class="card__description">
                                    <p class="card__status"><div class="card__status"> <span >Weight :  <?=$d['weight']?> kg </span> </div></p>
                                    <p class="card__status"><div class="card__status"> <span >Type :  <?=$d['type']?>  </span> </div></p>
                                    <p class="card__status"><div class="card__status"> <span >Dimensions (HxWxL) : <?=$d['height']?>/<?=$d['width']?>/<?=$d['length']?> cm </span> </div></p>
                                </div>

                            </div>
                        </a>
                    </li>
                <?}?>



            </ul>
        </div>

    </div>
</div>
</form>