@extends('master')
@section('content')
<style>
    :root {
    --dark-cyan: hsl(158, 36%, 37%);
    --cream: hsl(30, 38%, 92%);
    --very-dark-blue: hsl(157, 30%, 24%);
    --dark-grayish-blue: hsl(228, 12%, 48%);
    --white: hsl(0, 0%, 100%);
}

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Montserrat', sans-serif;
    background-color: var(--cream);
    height: 100vh;
    width: 100%;
}

main {
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
}
main .card {
    width: 600px;
    background-color: var(--white);
    display: flex;
    border-radius: 12px;
}
main .card .card__img, main .card .card__content {
    width: 50%;
}
main .card .card__img picture {
    width: 100%;
    height: 100%;
    display: block;
}
main .card .card__img picture img {
    width: 100%;
    height: 100%;
    border-radius: 12px 0px 0px 12px;
}

main .card .card__content {
    padding: 30px;
    display: flex;
    flex-direction: column;
    row-gap: 18px;
}
main .card .card__content .card__tag {
    text-transform: uppercase;
    letter-spacing: 3px;
    font-size: 14px;
    color: var(--dark-grayish-blue);
}
main .card .card__content .card__title {
    font-family: 'Fraunces', serif;
    text-transform: capitalize;
}
main .card .card__content .card__desc {
    font-size: 14px;
    color: var(--dark-grayish-blue);
    line-height: 24px;
}
main .card .card__content .card__price {
    display: flex;
    align-items: center;
    column-gap: 20px;
}
main .card .card__content .card__price h1 {
    color: var(--dark-cyan);
    font-family: 'Fraunces', serif;
}
main .card .card__content .card__price s {
    font-size: 14px;
    color: var(--dark-grayish-blue);
}
main .card .card__content .card__btn {
    display: flex;
    align-items: center;
    justify-content: center;
    column-gap: 10px;
    background-color: var(--dark-cyan);
    padding: 14px;
    outline: none;
    border: 0;
    border-radius: 10px;
    color: var(--white);
    font-weight: 700;
    font-size: 16px;
    cursor: pointer;
    transition: background 200ms linear;
}
main .card .card__content .card__btn:hover {
    background-color: var(--very-dark-blue);
}

@media (max-width: 600px) {
    body {
        height: auto;
    }
    main {
        padding: 20px;
    }
    main .card {
        flex-direction: column;
    }
    main .card .card__img, main .card .card__content {
        width: 100%;
    }
    main .card .card__img picture img {
        border-radius: 12px 12px 0px 0px;
    }
    main .card .card__content {
        padding: 20px;
        row-gap: 16px;
    }
}
</style>
<main>
        <div class="card">
            <div class="card__img">
                <picture>
                    <source style="width: 500px;" media="(min-width:600px)" srcset="img/products/{{$product->slug}}">
                    <img  src="img/products/{{$product->slug}}" alt="">
                </picture>
            </div>
            <div class="card__content">
                <p class="card__tag">{{$product->description}}</p>
                <h2 class="card__title">{{$product->productName}}</h2>

                <div class="card__price">
                    <h1>${{$product->price}}</h1>

                </div>
                <button class="card__btn">
                    <img src="https://rvs-product-preview-card-component.vercel.app/images/icon-cart.svg" alt="">
                    Add to Cart
                </button>
            </div>
        </div>
    </main>

    @endsection