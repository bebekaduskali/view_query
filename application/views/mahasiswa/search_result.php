    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="title">Hasil Pencarian Data Mahasiswa</h2>
                    <hr class="primary"/>
                </div>
            
                <!--<div class="col-lg-8 col-lg-offset-2 text-center">-->
                <!--<div class="col-lg-8 col-lg-offset-2">-->
                    <!--<h2 class="section-heading">We've got what you need!</h2>
                    <hr class="light">
                    <p class="text-faded">Start Bootstrap has everything you need to get your new website up and running in no time! All of the templates and themes on Start Bootstrap are open source, free to download, and easy to use. No strings attached!</p>
                    <a href="#services" class="page-scroll btn btn-default btn-xl sr-button">Get Started!</a>
                    -->
                    <span class="col-xs-2"></span>
                    <div class="col-xs-8" style="padding: 10px;">
                        <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>JK</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                foreach ($mahasiswa as $row){
                                ?>
                                <tr>
                                    <td></td>
                                    <td><?=$row->nm_pd?></td>
                                    <td><?=$row->jk?></td>
                                </tr> 
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    
                    
                <!--</div>-->
            </div>
        </div>
    </section>

<script>
$(document).ready(function() {
    var t = $('#example').DataTable( {
        "columnDefs": [ {
            "searchable": false,
            "orderable": false,
            "targets": 0
        } ],
        "order": [[ 1, 'asc' ]]
    } );
 
    t.on( 'order.dt search.dt', function () {
        t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
            cell.innerHTML = i+1;
        } );
    } ).draw();
} );
</script>