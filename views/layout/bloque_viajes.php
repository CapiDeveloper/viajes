<div class="row proximos-viajes">
            <?php foreach ($viajes as $viaje) { ?>
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card">
                        <img src="/img/destinos_<?php echo $viaje->imagen ?>.jpg" alt="" class="card-img-top">
                        <div class="card-body">
                        <h2><?php echo $viaje->titulo; ?></h2>
                        <p>
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-calendar-event" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#dc135f" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <rect x="4" y="5" width="16" height="16" rx="2" />
                                <line x1="16" y1="3" x2="16" y2="7" />
                                <line x1="8" y1="3" x2="8" y2="7" />
                                <line x1="4" y1="11" x2="20" y2="11" />
                                <rect x="8" y="15" width="2" height="2" />
                            </svg>
                            | <?php echo $viaje->fecha_ida .'  -  '. $viaje->fecha_vuelta ?>
                        </p>
                        <p>
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-users" width="40" height="40" viewBox="0 0 24 24" stroke-width="1.5" stroke="#dc135f" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <circle cx="9" cy="7" r="4" />
                                <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                <path d="M21 21v-2a4 4 0 0 0 -3 -3.85" />
                            </svg>
                            <?php echo $viaje->disponibles?> Disponibles
                        </p>
                        <p><?php 

                            echo substr($viaje->descripcion,-146,99); 
                            ?>
                        </p>
                        <a href='viaje?id=<?php echo $viaje->id?>' class="btn btn-success btn-block">Ver mas</a>
                        </div>
                    </div>
                </div>      
            <?php }; ?>
    </div>