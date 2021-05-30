
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Coming soon</title>

    <style>
*
{
  margin: 0;
  padding: 0;
}

body, html
{
  width: 100%;
  height: 100%;
  background: url(/img/soon.jpg) no-repeat;
  background-size: cover;
  font-family: 'Montserrat', sans-serif;
}

.container
{
  height: 100%;
  width: 100%;
  background: #2c3e50b3;
  display: flex;
  justify-content: center;
  align-items: center;
}

.container h1
{
  color: white;
  font-size: 5em;
  font-weight: 900;
  text-transform: uppercase;
}

.container h1 span
{
  display: block;
  background: #3bb16c;
  padding: 0 10px;
}

.menu
{
  position: absolute;
  top: 40px;
  left: 40px;
  overflow: hidden;
  width: 50px;
  cursor: pointer;
}

.menu  span
{
  height: 3px;
  display: block;
  margin: 6px;
  background: white;
  transition: 0.4s all;
}

.s1, .s3
{
  width: 100%;
}

.s2
{
  width: 70%;
}

.menu > a:hover > .s2
{
  width: 100%;
}


@media(max-width:600px){
  .container h1
{
  color: white;
  font-size: 1em;
  font-weight: 900;
  text-transform: uppercase;
}
}
    </style>
  </head>
  <body>
    <div class="container">
      <div class="menu">
        <a href="#">
          <span class="s1"></span>
          <span class="s2"></span>
          <span class="s3"></span>
        </a>
      </div>
      <h1>
        <span>Market place Hitcom888 </span>Ouverture proche...
      </h1>
    </div>
  </body>
  </html>