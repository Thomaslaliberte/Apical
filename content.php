<?php $num = 1;
    if ( have_posts() ) : while ( have_posts() ) : the_post();
        if(get_post_type() === 'post'):?>
            <div class="tout">
            <div class="contenupost">
            <h3 class="formation"><?php echo($num .". ") ?><?php the_title(); 
            
            ?></h3>
            </div>
            <?php
            $commentaires = get_comments(array(
                'post_id' => get_the_ID()
            ));

            if($commentaires){
                $num2 = 1;?>
                <div class="commentaires" style="display:none">
                    <?php
                    foreach( $commentaires as $commentaire){
                        $commentaire = $commentaire->comment_content
                        ?>
                        <div class="commentaire">
                            <div class="interieurcommentaire"><?php echo($num .".". $num2 ." " . $commentaire)?></div>
                        </div>
                        <?php
                        $num2 = $num2 + 1;
                    }
                    ?>
                </div>
                <?php
            }
            $num = $num +1;
            ?></div><?php
        endif;
        endwhile; ?>
        <div style="border: 1px solid rgba(0,0,0,.125); border-bottom: 0!important"></div>

    <?php else: ?>

    <p>No posts found. :(</p>

    <?php endif; ?>