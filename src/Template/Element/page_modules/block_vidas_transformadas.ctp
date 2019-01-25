<div class="section_lifes">
    <div class="wrapper">
        <h2>Vidas Transformadas</h2>
        <div class="box">
            <?php foreach($testimonials as $testimonial):?>
            <div class="item">
                <div class="media">
                    <?php echo $this->Html->image('../uploads/files/'.$testimonial['files'][0]['filename']);?>
                </div>
                <div class="content">
                    <h3>Raissa Lima</h3><span>Aluna e Monitora de judô</span>
                    <p>“A Luta pela Paz é o ponto mais positivo que a gente tem aqui na Maré. Ela me apoiou muito na questão familiar, que era muito difícil, na questão profissional e na educativa.”</p>
                </div>
            </div>
            <?php endforeach; ?>
        </div><a class="btn_more" href="#">Acompanhe</a>
    </div>
</div>