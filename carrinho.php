<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="carrinho.css">
    <link rel="shortcut icon" href="images/favicon.png" type="image/png">

    <title>Carrinho</title>
  </head>
  <body>

    <script  async src="carrinho.js"></script>

 
    <header>
      <h1>Carrinho</h1>
  </header>
  
     



    <main>

        <table class="cart-table">
          <thead>
            <tr>
              <th class="table-head-item">Item</th>
              <th class="table-head-item second-col">Preço</th>
              <th class="table-head-item third-col">Quantidade</th>
            </tr>
          </thead>

          <tbody>

            
            <tr class="cart-product">
              <td class="product-identification">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSt0IQRwJXpnQyEvA6Ou14WBT41RJpWyHIEvg&usqp=CAU" alt="Miniatura" class="cart-product-image">
                <strong class="cart-product-title">BASTA DE DEPRESSÃO</strong>
              </td>
              <td>
                <span class="cart-product-price">R$120,00</span>
              </td>
              <td>
                <input type="number" value="1" min="0" class="product-qtd-input">
                <button type="button" class="remove-product-button">Remover</button>
              </td>
            </tr>



            <tr class="cart-product">
              <td class="product-identification">s
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSstZSJr2PD6YM6cv5TB39ON9x6QwCiySwo5g&usqp=CAU" alt="Poster 3" class="cart-product-image">
                <strong class="cart-product-title">DEPRESSÃO</strong>
              </td>
              <td>
                <span class="cart-product-price">R$120,00</span>
              </td>
              <td>
                <input type="number" value="1" min="0" class="product-qtd-input">
                <button type="button" class="remove-product-button">Remover</button>
              </td>
            </tr>



            
          </tbody>

          <tfoot>
            <tr>
              <td colspan="3" class="cart-total-container">
                <strong>Total</strong>
                <span>R$240,00</span>
              </td>
            </tr>
          </tfoot>
        </table>

        <button type="button" class="purchase-button">Finalizar Compra</button>
      </section>
    </main>









 
  </body>
</html>