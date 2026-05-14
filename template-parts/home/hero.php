<?php

if (! defined('ABSPATH')) {
    exit;
}

$hero_image = (string) ($args['hero_image'] ?? '');
$person_image = (string) ($args['person_image'] ?? '');
?>

<section class="betpro-home-hero relative overflow-hidden min-h-[92svh] flex items-center border-b border-border bg-background py-20 lg:py-28">
    <div class="absolute inset-0 z-0">
        <img src="<?php echo esc_url($hero_image); ?>" alt="" class="h-full w-full object-cover opacity-20" fetchpriority="high" />
        <div class="absolute inset-0 bg-gradient-to-br from-background via-background/85 to-background/50"></div>
    </div>
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 w-full">
        <div class="grid gap-14 lg:grid-cols-2 lg:items-center">
            <div class="betpro-reveal" data-betpro-reveal>
                <div class="betpro-eyebrow inline-flex items-center gap-2 rounded-full border border-primary/25 bg-primary/10 px-4 py-1.5 text-sm font-semibold text-primary mb-7">
                    <?php esc_html_e('#1 Verified Betting Account Provider', 'betpro-account'); ?>
                </div>
                <h1 class="text-5xl lg:text-6xl xl:text-7xl font-extrabold tracking-tight mb-6 leading-[1.08]">
                    <span class="betpro-home-hero__line"><?php esc_html_e('BetPro Account', 'betpro-account'); ?></span>
                    <span class="betpro-home-hero__line text-gradient-green"><?php esc_html_e('That Delivers', 'betpro-account'); ?></span>
                    <span class="betpro-home-hero__line"><?php esc_html_e('Verified Betting Accounts', 'betpro-account'); ?></span>
                </h1>
                <div class="betpro-home-hero__chips">
                    <?php foreach (array('BetPro', 'SixerPlus') as $platform) : ?>
                        <a class="betpro-platform-chip" href="<?php echo esc_url(home_url('/services/')); ?>">
                            <span class="betpro-platform-chip__dot" aria-hidden="true"></span>
                            <span><?php echo esc_html($platform); ?></span>
                            <span class="betpro-platform-chip__icon" aria-hidden="true"><i class="fa-solid fa-arrow-right"></i></span>
                        </a>
                    <?php endforeach; ?>
                </div>
                <p class="text-lg text-muted-foreground mb-9 leading-8 max-w-xl">
                    <?php esc_html_e('We create, verify, and hand-deliver premium BetPro and SixerPlus accounts for customers who need fast, reliable setup and support.', 'betpro-account'); ?>
                </p>
                <div class="betpro-home-hero__actions flex flex-col sm:flex-row gap-4 mb-8">
                    <?php
                    betpro_account_render_button(betpro_account_whatsapp_url(), betpro_account_primary_cta_label(), 'primary', true);
                    betpro_account_render_button(home_url('/services/'), __('View Services', 'betpro-account'), 'secondary');
                    ?>
                </div>
                <div class="betpro-home-hero__proof grid gap-3 text-sm text-muted-foreground sm:grid-cols-2">
                    <?php foreach (array('100% KYC Verified', 'Delivered in 24-48h', 'Replacement Guarantee', '24/7 WhatsApp Support') as $proof) : ?>
                        <span><i class="fa-solid fa-check" aria-hidden="true"></i><?php echo esc_html($proof); ?></span>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="betpro-home-hero__visual betpro-reveal relative hidden lg:block" data-betpro-reveal>
                <div class="betpro-home-hero__visual-glow absolute inset-0 rounded-full bg-primary/15 blur-[100px]"></div>
                <div class="betpro-home-hero__image-card relative overflow-hidden rounded-2xl shadow-2xl ring-1 ring-white/10">
                    <img src="<?php echo esc_url($person_image); ?>" alt="<?php esc_attr_e('Professional betting account support workspace', 'betpro-account'); ?>" class="h-[480px] w-full object-cover object-top" />
                    <div class="absolute inset-0 bg-gradient-to-t from-background/80 via-transparent to-transparent"></div>
                </div>
                <?php foreach (array('delivery' => 'Under 24 Hours', 'status' => 'Verified & Active') as $type => $value) : ?>
                    <div class="glass-card betpro-hero-badge betpro-hero-badge--<?php echo esc_attr($type); ?>">
                        <span class="betpro-hero-badge__icon" aria-hidden="true">
                            <i class="fa-solid <?php echo esc_attr($type === 'delivery' ? 'fa-clock' : 'fa-circle-check'); ?>"></i>
                        </span>
                        <span><small><?php echo esc_html($type === 'delivery' ? 'Avg Delivery' : 'Account Status'); ?></small><strong><?php echo esc_html($value); ?></strong></span>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

<section class="betpro-bookmaker-strip" aria-label="<?php esc_attr_e('Currently supported bookmakers', 'betpro-account'); ?>">
    <div class="betpro-bookmaker-strip__track">
        <?php foreach (array('Betpro', 'SixerPlus', 'BetBro', 'SixerPlus', 'BetPro', 'SixerPlus', 'Betpro', 'SixerPlus') as $bookmaker) : ?>
            <span><?php echo esc_html($bookmaker); ?></span>
        <?php endforeach; ?>
    </div>
</section>
