<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>
    <div class="top">
        <div class="company_name f_futura">Dsyl Co., Ltd.</div>   
    </div>
    <div class="business">
        <div class="section_title color-white">BUSINESS</div>
        <div class="grid_wrapper">
            <div class="grid">
                <div class="content">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/noimg.jpg">
                    <div class="business_title">
                        ブランド品の仕入れ買取
                    </div>
                    <div class="business_exp">
                        弊社では、国内外問わず直接現地で買い付けを行い、新作・国内未入荷・限定商品等の希少なアイテムを取り揃えております。<br>
                        基本的に、1点ものの商品で、掲載商品はすべて正規品を取り扱いしております。<br>
                        また、中古品に関しましても専任スタッフが厳重に真贋を行っており、ネットでの販売も行っております。<br>
                    </div>
                </div>

                <div class="content">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/noimg.jpg">
                    <div class="business_title">
                        化粧品の販売
                    </div>
                    <div class="business_exp">
                        弊社は、年齢・性別を問わずお客さまに「キレイを楽しむ毎日」を送っていいただくことを願い、独自の化粧品を販売を行っています。<br>
                        美白成分の水溶性プラセンタ配合。化粧水・美容液・クリームとスキンケアアイテムが一つになったオールインワン化粧品<br>
                        肌細胞の生まれ変わりを担う、幹細胞エキスを使ったエイジングケアのグランファンデーション化粧品を取り扱っております。<br>
                    </div>
                </div>
            </div>
        </div>
        <div class="etc_text">
            上記のほかにも、新規事業が進行しております。
        </div>
    </div>
    <div class="company">
        <div class="section_title">COMPANY</div>
        <div class="info_wrapper">
            <div class="info_detail">
                <div class="row">
                    <div class="row_label">
                        社名
                    </div>
                    <div class="row_body">
                        株式会社Dsyl
                    </div>
                </div>
                <div class="row">
                    <div class="row_label">
                        所在地
                    </div>
                    <div class="row_body">
                        高槻市月見町13番21号
                    </div>
                </div>
                <div class="row">
                    <div class="row_label">
                        営業所
                    </div>
                    <div class="row_body">
                        大阪市中央区安堂寺町2丁目2番15号　島田ビル４０５号
                    </div>
                </div>
                <div class="row">
                    <div class="row_label">
                        会社設立
                    </div>
                    <div class="row_body">
                        2020年3月
                    </div>
                </div>
                <div class="row">
                    <div class="row_label">
                        代表取締役
                    </div>
                    <div class="row_body">
                        中坪優斗
                    </div>
                </div>
                <div class="row">
                    <div class="row_label">
                        資本金
                    </div>
                    <div class="row_body">
                        ３００万
                    </div>
                </div>
                <div class="row">
                    <div class="row_label">
                        事業内容
                    </div>
                    <div class="row_body">
                        化粧品・衣料品・ブランド品の買取、小売り及び業者販売
                    </div>
                </div>
                <div class="row">
                    <div class="row_label">
                        免許番号
                    </div>
                    <div class="row_body">
                        古物商 大阪府公安委員会　現在申請中
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="contact">
        <div class="section_title">CONTACT US</div>
        <div class="text">
            メールにてお問い合わせください。
        </div>
    </div>
<?php
get_footer();