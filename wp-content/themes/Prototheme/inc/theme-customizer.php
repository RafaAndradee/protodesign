<?php



function funcao_do_customizer( $wp_customize ) {
    /**
     * Define a sessão
     * Para este exemplo nossa sessão terá o ID "campos_de_texto", título "Textos" e
     * descrição "Altere os textos do seu tema."
     */
    $wp_customize->add_section(
        'campos_de_texto',
        array(
            'title'       => 'Concultoria',
            'description' => 'Altere os textos do seu tema.',
            'priority'    => 30,
        )
    );
 
    /**
     * Adiciona uma nova setting
     * O interessante aqui é que você pode definir um valor padrão e o modo como 
     * o transport será realizado.
     */
    $wp_customize->add_setting(
        'textoSessao1', // campo
        array(
            'default'   => '', // Valor padrão 
            'transport' => 'refresh', // Transport
        )
    );
 
 
    /**
     * Adiciona um control
     * Aqui você trata do campo que será exibido.
     */
    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        "textoSessao1", // campo
        array(
            "label"    => "Texto da apresentação", // Rótulo do campo
            "section"  => "campos_de_texto", // Sessão que o campo será exibido
            "settings" => "textoSessao1", // A settings do campo
            "type"     => "textarea", // Tipo do campo
        )
    ));


        // -------------------------------------------------------------------------
    // Área de texto do tipo "titulo da sessão 1"
    // -------------------------------------------------------------------------
 
    $wp_customize->add_setting(
        'titulodescricao1', 
        array(
            'default'   => "Titulo", // Valor padrão 
            'transport' => 'refresh', // Transport
        )
    );
  
    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        "titulodescricao1",
        array(
            "label"    => "titulo da descrição 1", // Rótulo do campo
            "section"  => "campos_de_texto", // A seção
            "settings" => "titulodescricao1", // Settings do campo
            "type"     => "text", // Área de texto do tipo textarea
        )
    ));
 
        // -------------------------------------------------------------------------
    // Área de texto do tipo "Texto da descrição 1"
    // -------------------------------------------------------------------------
 
    // Setting do campo4
    $wp_customize->add_setting(
        'descricao1',
        array(
            'default'   => "Descrição", // Valor padrão 
            'transport' => 'refresh', // Transport
        )
    );
    // Controle do campo4
    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        "descricao1", // campo4
        array(
            "label"    => "Texto da descrição 1", // Rótulo do campo
            "section"  => "campos_de_texto", // A seção
            "settings" => "descricao1", // Settings do campo
            "type"     => "textarea", // Área de texto do tipo textarea
        )
    ));
 





    // -------------------------------------------------------------------------
    // Área de texto do tipo "titulo da sessão 2"
    // -------------------------------------------------------------------------
 
    $wp_customize->add_setting(
        'titulodescricao2', 
        array(
            'default'   => "Titulo", // Valor padrão 
            'transport' => 'refresh', // Transport
        )
    );
  
    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        "titulodescricao2",
        array(
            "label"    => "titulo da descrição 2", // Rótulo do campo
            "section"  => "campos_de_texto", // A seção
            "settings" => "titulodescricao2", // Settings do campo
            "type"     => "text", // Área de texto do tipo textarea
        )
    ));
 
        // -------------------------------------------------------------------------
    // Área de texto do tipo "Texto da descrição 2"
    // -------------------------------------------------------------------------
 
    // Setting do campo4
    $wp_customize->add_setting(
        'descricao2',
        array(
            'default'   => "Descrição", // Valor padrão 
            'transport' => 'refresh', // Transport
        )
    );
    // Controle do campo4
    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        "descricao2", // campo4
        array(
            "label"    => "Texto da descrição 2", // Rótulo do campo
            "section"  => "campos_de_texto", // A seção
            "settings" => "descricao2", // Settings do campo
            "type"     => "textarea", // Área de texto do tipo textarea
        )
    ));
 



     // -------------------------------------------------------------------------
    // Área de texto do tipo "titulo da sessão 3"
    // -------------------------------------------------------------------------
 
    $wp_customize->add_setting(
        'titulodescricao3', 
        array(
            'default'   => "Titulo", // Valor padrão 
            'transport' => 'refresh', // Transport
        )
    );
  
    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        "titulodescricao3",
        array(
            "label"    => "titulo da descrição 3", // Rótulo do campo
            "section"  => "campos_de_texto", // A seção
            "settings" => "titulodescricao3", // Settings do campo
            "type"     => "text", // Área de texto do tipo textarea
        )
    ));
 
        // -------------------------------------------------------------------------
    // Área de texto do tipo "Texto da descrição 3"
    // -------------------------------------------------------------------------
 
    // Setting do campo4
    $wp_customize->add_setting(
        'descricao3',
        array(
            'default'   => "Descrição", // Valor padrão 
            'transport' => 'refresh', // Transport
        )
    );
    // Controle do campo4
    $wp_customize->add_control(new WP_Customize_Control(
        $wp_customize,
        "descricao3",
        array(
            "label"    => "Texto da descrição 3", // Rótulo do campo
            "section"  => "campos_de_texto", // A seção
            "settings" => "descricao3", // Settings do campo
            "type"     => "textarea", // Área de texto do tipo textarea
        )
    ));



}
 

