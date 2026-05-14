<?php

if (! defined('ABSPATH')) {
    exit;
}
?>

<section class="betpro-stat-band py-16 bg-primary/5 border-b border-primary/10">
    <div class="max-w-[90rem] mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 gap-6 text-center md:grid-cols-4">
            <?php
            $stats = array(
                array('value' => '10,000+', 'label' => __('Accounts Delivered', 'betpro-account')),
                array('value' => '30+', 'label' => __('Bookmakers Supported', 'betpro-account')),
                array('value' => '98%', 'label' => __('Verified Success Rate', 'betpro-account')),
                array('value' => '2,500+', 'label' => __('Happy Customers', 'betpro-account')),
            );
            foreach ($stats as $stat) :
                ?>
                <div class="betpro-reveal p-6" data-betpro-reveal>
                    <div class="text-4xl md:text-5xl font-extrabold text-foreground mb-1"><?php echo esc_html($stat['value']); ?></div>
                    <div class="text-sm text-primary font-medium"><?php echo esc_html($stat['label']); ?></div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="betpro-live-sales py-18 bg-background">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="betpro-live-sales__panel betpro-reveal" data-betpro-reveal data-betpro-live-sales>
            <div class="betpro-live-sales__intro">
                <p class="betpro-eyebrow"><?php esc_html_e('Live Sales Desk', 'betpro-account'); ?></p>
                <h2><?php esc_html_e('Verified orders are moving through today’s queue.', 'betpro-account'); ?></h2>
                <p><?php esc_html_e('This section gives new visitors a realistic snapshot of active BetPro orders, verification checks, and delivery progress happening across the day.', 'betpro-account'); ?></p>
                <div class="betpro-live-sales__meta">
                    <span><?php esc_html_e('Auto-updating trust counter', 'betpro-account'); ?></span>
                    <span data-betpro-live-clock><?php esc_html_e('Updated just now', 'betpro-account'); ?></span>
                </div>
            </div>
            <div class="betpro-live-sales__grid">
                <article class="betpro-live-sales__card">
                    <span><?php esc_html_e('Orders Closed Today', 'betpro-account'); ?></span>
                    <strong data-betpro-live-number data-base="18" data-min="16" data-max="24">18</strong>
                    <small><?php esc_html_e('Combined BetPro sales', 'betpro-account'); ?></small>
                </article>
                <article class="betpro-live-sales__card">
                    <span><?php esc_html_e('Accounts In Verification', 'betpro-account'); ?></span>
                    <strong data-betpro-live-number data-base="7" data-min="5" data-max="11">7</strong>
                    <small><?php esc_html_e('KYC checks running right now', 'betpro-account'); ?></small>
                </article>
                <article class="betpro-live-sales__card">
                    <span><?php esc_html_e('Support Replies Live', 'betpro-account'); ?></span>
                    <strong data-betpro-live-number data-base="4" data-min="3" data-max="6">4</strong>
                    <small><?php esc_html_e('Active WhatsApp conversations', 'betpro-account'); ?></small>
                </article>
                <article class="betpro-live-sales__card">
                    <span><?php esc_html_e('Delivery Progress Today', 'betpro-account'); ?></span>
                    <strong><span data-betpro-live-number data-base="18" data-min="16" data-max="24">18</span>/24</strong>
                    <small><?php esc_html_e('Orders already completed today', 'betpro-account'); ?></small>
                </article>
            </div>
            <div class="betpro-live-sales__progress">
                <div class="betpro-live-sales__progress-copy">
                    <strong><?php esc_html_e('Fulfilment Bar', 'betpro-account'); ?></strong>
                    <span data-betpro-live-progress-label><?php esc_html_e('18 of 24 delivered', 'betpro-account'); ?></span>
                </div>
                <div class="betpro-live-sales__bar">
                    <span data-betpro-live-progress style="width:75%"></span>
                </div>
            </div>
            <div class="betpro-live-sales__ticker">
                <span class="betpro-live-sales__pulse" aria-hidden="true"></span>
                <p data-betpro-live-status><?php esc_html_e('One BetPro order cleared checks and moved to delivery 4 minutes ago.', 'betpro-account'); ?></p>
            </div>
        </div>
    </div>
</section>

<section class="betpro-home-services py-24 bg-background">
    <div class="max-w-[90rem] mx-auto px-4 sm:px-6 lg:px-8">
        <div class="betpro-section-heading betpro-reveal text-center max-w-2xl mx-auto mb-14" data-betpro-reveal>
            <p class="betpro-eyebrow"><?php esc_html_e('Why BetPro', 'betpro-account'); ?></p>
            <h2 class="text-3xl md:text-4xl font-extrabold mb-4"><?php esc_html_e('Why Bettors Choose BetPro Account', 'betpro-account'); ?></h2>
            <p class="text-muted-foreground"><?php esc_html_e('From verified account setup to fast support, we keep the full process simple and reliable.', 'betpro-account'); ?></p>
        </div>
        <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-4">
            <?php
            $services = array(
                array('icon' => 'fa-user-plus', 'title' => __('Account Creation', 'betpro-account'), 'text' => __('Fresh, fully registered accounts on supported bookmakers.', 'betpro-account')),
                array('icon' => 'fa-wallet', 'title' => __('Account Top-Up', 'betpro-account'), 'text' => __('Safe funding support using crypto, bank transfer, Easypaisa, JazzCash and more.', 'betpro-account')),
                array('icon' => 'fa-id-card', 'title' => __('KYC Verification', 'betpro-account'), 'text' => __('Guidance for document verification and accounts stuck in review.', 'betpro-account')),
                array('icon' => 'fa-headset', 'title' => __('Account Management', 'betpro-account'), 'text' => __('Monitoring, replacement support, and help when limits or issues appear.', 'betpro-account')),
            );
            foreach ($services as $index => $service) :
                ?>
                <article class="betpro-choice-card betpro-reveal relative overflow-hidden rounded-2xl border border-border bg-card p-7 transition-all hover:-translate-y-1 hover:border-primary/30" data-betpro-reveal>
                    <span class="betpro-choice-card__icon" aria-hidden="true"><i class="fa-solid <?php echo esc_attr($service['icon']); ?>"></i></span>
                    <div class="absolute right-5 top-5 text-6xl font-black text-primary/5"><?php echo esc_html(str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT)); ?></div>
                    <h3 class="relative text-lg font-bold mb-3"><?php echo esc_html($service['title']); ?></h3>
                    <p class="relative text-sm text-muted-foreground leading-7"><?php echo esc_html($service['text']); ?></p>
                </article>
            <?php endforeach; ?>
        </div>
        <div class="betpro-service-tags betpro-reveal" data-betpro-reveal>
            <?php foreach (array('Verified account setup', 'Fast processing', 'Secure transactions', '24/7 support', 'Help on WhatsApp, Telegram & Facebook') as $tag) : ?>
                <span><?php echo esc_html($tag); ?></span>
            <?php endforeach; ?>
        </div>
    </div>
</section>
