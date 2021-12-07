<footer>
        <div class="rodape-ong">
            <h3>2021. ONG APV - Apoio às Pessoas em Situação de Vulnerabilidade</h3>
        </div>
        <div class="rodape-grupo">
            <p>Alícia Lopes, Gustavo Henrique Medeiros Bezerra, José Victor de Oliveira dos Santos, Millena Alburquerque de Almeida, Rodrigo Tarcis Bueno Elias</p>
            <p class="etec">ETEC de Guarulhos - Desenvolvimento de Sistemas</p>
        </div>
    </footer>

    <script src="https://kit.fontawesome.com/02bf735292.js" crossorigin="anonymous"></script>
    <script>
        var el = document.querySelector('.menu-mobile-icon');

        el.addEventListener('click',()=>{
            //vai mostrar o menu
            var menuItems = document.querySelector('.menu-items');
            if(menuItems.classList.contains('show')){
                menuItems.classList.add('hide');
                menuItems.classList.remove('show');
            } else{
                menuItems.classList.add('show');
                menuItems.classList.remove('hide');
            }
        })
    </script>
    </body>

</html>