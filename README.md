# Projeto - Blog

Padrões CSS.

1º UTILIZE A DECLARAÇÃO ABREVIADA DAS PROPRIEDADES

.box {
    
    margin: 2px 3px 5px 9px;
    
    font: bold 12px/14px Arial, Verdana, sans-serif;
    
    border: 1px solid #000;
    
    background: #FFF url(images/background.gif) 0 15px no-repeat;
}

2ºPADRÕES DE NOMENCLATURAS PARA CLASSES E IDS
  
    CLASSE: nome-com-hífen
    
    ID: camelCase
    


3º FAÇA UMA DIVISÃO LÓGICA DO SEU CSS
Organize o estilo em determinadas seções, para facilitar a criação e a manutenção dos estilos e marque estas divisões com comentários CSS.

Uma sugestão de seções para realizar esta divisão:

Global (reset, corpo da pagina, estilo padrão para parágrafos, listas, etc.)
Cabeçalho da página
Estrutura da página
Rodapé
Estilos de títulos
Estilos de texto
Navegação
Formulários
Extras ou Miscelâneas
Os estilos de título e estilos de texto diferem dos estilos globais pois contém também definições de classes, enquanto que os estilos globais tratam apenas de definição para os seletores de tags.
Exemplos de comentários CSS que você pode utilizar para marcar a divisão de seções:

   
    /* -----------------------------------*/
    
    /* ---------->>> GLOBAL <<<-----------*/
    
    /* -----------------------------------*/
    
    /* GLOBAL > RESET
    
    //////////////////////////////////////*/
    
    /**
    
    * Estilos Globais
    
    *
    
    * @section global reset
    
    */
  



