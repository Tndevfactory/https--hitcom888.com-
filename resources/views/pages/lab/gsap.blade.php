@extends('layouts.app') @section('meta')
<title>gsap</title>
@endsection @section('content')
<div class="container">
    <?php $data=[
        'level1' =>
    "Gsap", 'level2' => "Details" ] ?> @include('components.breadcrumb', $data)

    <p class="mb-5">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis ab
        animi assumenda quas impedit, placeat commodi cupiditate praesentium
        modi beatae tenetur facere temporibus quidem molestiae omnis dolore
        mollitia eligendi maxime unde est ut, a expedita recusandae vel. Nobis,
        labore quas quaerat tempore maxime laboriosam! Assumenda veritatis illum
        maiores. Optio, tempore! Lorem ipsum dolor sit amet consectetur
        adipisicing elit. Totam dolorum delectus eos autem culpa omnis ea ipsam.
        Cum rem illo unde animi maxime nostrum atque placeat autem facilis.
        Commodi assumenda sed incidunt voluptates, id est laborum totam
        voluptate in, ab cumque quibusdam ipsam fuga ducimus consequatur
        consectetur mollitia sequi tenetur saepe fugit explicabo natus.
        Adipisci, mollitia quidem! Qui et dolorum ducimus praesentium
        exercitationem? Unde, magni? Alias repellendus quae libero quidem,
        provident voluptas fugit facere tempora vero esse dolorem quia, possimus
        aperiam aliquid commodi iusto cupiditate amet necessitatibus fuga
        minima, eveniet maxime molestias enim nam. Veritatis dolorum cumque
        consectetur error saepe exercitationem ad facilis, quasi aliquam fugiat
        excepturi accusamus, fuga voluptates esse. Dignissimos error architecto
        totam aliquid. Aliquam minus sed sit accusamus beatae deserunt eligendi
        ducimus architecto eveniet natus delectus error placeat corporis fugit
        ipsa officiis corrupti ullam, at cum, deleniti aut consectetur. Harum
        amet iste autem enim dignissimos atque voluptatum commodi quis dolore,
        aspernatur et modi eum corporis? Exercitationem magni voluptas sapiente,
        deleniti tempora adipisci, beatae iure ex hic totam obcaecati unde eum,
        esse dolores accusantium perferendis fugit possimus? Perspiciatis
        mollitia aliquam temporibus quasi dolorum officiis reprehenderit, ipsa
        aperiam obcaecati quisquam tenetur quo illum dignissimos. Quod magni
        maxime porro, pariatur reprehenderit delectus illo nobis illum quibusdam
        ad quos omnis mollitia eligendi soluta, asperiores vero veritatis vel
        quam obcaecati expedita. Perspiciatis similique consequatur culpa ullam
        repudiandae id architecto ipsa, pariatur illum! Harum provident aut et
        odio quod ipsam consequuntur est modi nostrum error quibusdam corporis,
        ex impedit velit dolor quaerat architecto amet. Obcaecati molestias
        facere, veniam doloremque itaque aliquam! Perferendis distinctio sint
        tenetur ex voluptatibus! Incidunt reiciendis possimus perferendis
        tenetur sed porro amet voluptatem exercitationem quibusdam, officiis ab
        maiores optio nam numquam delectus maxime fugiat temporibus libero
        eaque. Ipsa nesciunt doloribus quibusdam, quis quisquam praesentium
        exercitationem? Dolores pariatur voluptatibus fuga illo repudiandae,
        est, facilis provident doloribus cumque sint porro enim, qui id non
        autem assumenda corporis deserunt cum necessitatibus esse.
        Exercitationem repudiandae a dicta adipisci perferendis sunt nemo eos
        placeat obcaecati, quidem tempore assumenda porro itaque laborum beatae.
        Eius reprehenderit illum nobis temporibus error ipsum architecto
        mollitia sed? Rem ex quos voluptates atque, magni commodi dolor!
        Ratione, quas ad repellendus quasi cumque impedit dolores minima
        voluptate numquam enim quidem nam aliquam error voluptas at nihil
        molestias laudantium eos quis dicta vel repellat similique iusto. Aut
        dolorem corrupti nihil culpa quo commodi vel harum, provident, numquam
        sequi rem molestiae. Quaerat molestiae magnam optio est illo possimus
        exercitationem, illum, perferendis, iste rerum voluptatum! Rem quae
        blanditiis assumenda architecto explicabo corporis odio quia
        consequuntur adipisci aliquam. Doloribus laudantium iste quibusdam
        incidunt laboriosam, deleniti cumque consectetur deserunt voluptatibus
        ullam praesentium porro! Labore necessitatibus laudantium saepe minus
        voluptatum mollitia recusandae consectetur at vel harum voluptatem
        dolorem, repellat ad commodi corporis debitis, incidunt corrupti
        nostrum, magni iste? Nemo quis aperiam praesentium laborum, provident
        accusantium, facere nulla consequatur enim vel, sequi velit quos dolore
        autem sed. Esse aperiam deleniti quam sequi. Mollitia ex officia facere
        quod sunt provident, delectus dolor sit ipsum! Aliquam modi deleniti
        pariatur cum harum iste corporis labore dignissimos enim itaque facilis,
        quasi officiis et adipisci sapiente debitis error dolorum repellat
        similique optio reiciendis accusamus unde! Eaque culpa iusto esse libero
        qui quas reiciendis eius! Commodi, odio, fugiat ullam vero inventore eos
        doloribus tempora hic molestias consectetur, iusto quam repellat
        quibusdam? Delectus sed voluptas nobis provident ducimus earum, soluta
        dolorem atque rem, aperiam sit accusantium tenetur magni asperiores
        tempore quas accusamus sint velit. Voluptates ab, debitis minus ex,
        repellendus quia labore soluta voluptatem exercitationem repellat sunt
        nemo id inventore, suscipit vitae ad placeat dolorem? Accusantium sequi
        molestiae totam nesciunt ratione enim inventore ullam labore nobis?
    </p>
    <div class="wrapper">
        <div class="boxes">
            @for ($i = 0; $i < 10; $i++)
            <div class="box shadow-lg">
                <div class="card" style="width: 18rem">
                    <div class="promo_rate d-flex justify-content-between">
                        <button
                            class="
                                btn btn-sm
                                badge
                                rounded-pill
                                bg-primary
                                text-light
                            "
                        >
                            Nouveau <i class="fas fa-level-up-alt"></i>
                        </button>
                        <button
                            class="
                                btn btn-sm
                                badge
                                rounded-pill
                                bg-success
                                text-light
                            "
                        >
                            -25% <i class="fas fa-sort-down"></i>
                        </button>
                    </div>
                    <div class="overlay">
                        {{-- to product detail --}}
                        <a
                            href="#"
                            type="button"
                            class="details btn btn-sm bg-primary"
                        >
                            Details <i class="far fa-eye"></i>
                        </a>
                        <button
                            type="button"
                            data-bs-toggle="modal"
                            data-bs-target="#exampleModal"
                            class="commander btn btn-sm bg-success text-light"
                        >
                            Acheter<i class="fas fa-cart-plus"></i>
                        </button>
                    </div>
                    <img
                        src="https://picsum.photos/300/202"
                        class="card-img-top"
                        alt="..."
                    />
                    <div class="card-body">
                        <div class="name_rate_avis d-flex align-items-start">
                            <h5 class="card-title text-secondary">
                                Espadrit Nike
                            </h5>
                            <div class="star_avis">
                                {{-- rating avis --}}
                                <a
                                    href="#"
                                    style="font-size: 12px"
                                    class="
                                        stars
                                        ms-2
                                        mt-n1
                                        d-inline-block
                                        text-decoration-none
                                    "
                                >
                                    <i
                                        style="color: #ddd"
                                        class="far fa-star"
                                    ></i>
                                    <i
                                        style="color: #ddd"
                                        class="far fa-star"
                                    ></i>
                                    <i
                                        style="color: #ffba08"
                                        class="fas fa-star"
                                    ></i>
                                    <i
                                        style="color: #ffba08"
                                        class="fas fa-star"
                                    ></i>
                                    <i
                                        style="color: #ffba08"
                                        class="fas fa-star"
                                    ></i>
                                </a>
                                <a
                                    href="#"
                                    class="
                                        text-muted
                                        ms-1
                                        mt-n3
                                        d-inline-block
                                        text-decoration-none
                                        fw-light
                                        fs-6
                                    "
                                    >(2)</a
                                >
                            </div>
                        </div>
                        <p class="card-text text-secondary">
                            Espadrit Nike pump best choix pour les footballers
                        </p>
                        <div
                            class="price_old_new d-flex justify-content-between"
                        >
                            <a href="#" class="btn btn-default text-success"
                                >1370 TND</a
                            >
                            <a
                                href="#"
                                class="
                                    btn btn-default
                                    text-decoration-line-through text-muted
                                "
                                >1470 TND</a
                            >
                        </div>
                    </div>
                </div>
            </div>

            {{-- modal --}}
            <div
                class="modal fade"
                id="exampleModal"
                tabindex="-1"
                aria-labelledby="exampleModalLabel"
                aria-hidden="true"
            >
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div
                            style="height: 4vh; background-color: #11a74b"
                            class="modal-header text-light bg-success"
                        >
                            <h6 class="modal-title" id="exampleModalLabel">
                                <i class="fas fa-cart-arrow-down"></i> Article
                                ajouté à votre panier
                            </h6>
                            <button
                                type="button"
                                class="btn-sm btn-close"
                                data-bs-dismiss="modal"
                                aria-label="Close"
                            ></button>
                        </div>
                        <div class="modal-body">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-md-4">
                                        <img
                                            src="https://picsum.photos/300/200"
                                            class="img-thumbnail"
                                            alt="..."
                                        />
                                    </div>
                                    <div class="col-md-8">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Article</th>
                                                    <th scope="col">
                                                        Designation
                                                    </th>
                                                    <th scope="col">
                                                        Quantite
                                                    </th>
                                                    <th scope="col">Prix</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="table-success">
                                                    <th scope="row">
                                                        <i
                                                            class="
                                                                fas
                                                                fa-long-arrow-alt-right
                                                            "
                                                        ></i>
                                                    </th>
                                                    <td>Bracelet</td>
                                                    <td>1</td>
                                                    <td>120.30</td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Panier</th>
                                                    <th scope="col">
                                                        # Articles
                                                    </th>
                                                    <th scope="col">Taxes</th>
                                                    <th scope="col">Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <th scope="row">
                                                        <i
                                                            class="
                                                                fas
                                                                fa-cart-arrow-down
                                                            "
                                                        ></i>
                                                    </th>
                                                    <td>5</td>
                                                    <td>7.89</td>
                                                    <td>1320.89</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button
                                type="button"
                                class="continuer_achat btn btn-success"
                                data-bs-dismiss="modal"
                            >
                                Continuer mes achats
                            </button>
                            {{-- to command detail --}}
                            <a
                                href="#"
                                type="button"
                                class="consulter_panier btn btn-primary"
                                >Consulter mon panier</a
                            >
                        </div>
                    </div>
                </div>
            </div>
            @endfor
        </div>
    </div>
</div>
@endsection
