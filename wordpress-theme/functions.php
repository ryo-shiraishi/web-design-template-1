<?php

function sample_partners_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', [
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ] );
}
add_action( 'after_setup_theme', 'sample_partners_setup' );

function sample_partners_scripts() {
    wp_enqueue_style(
        'sample-partners-style',
        get_stylesheet_uri(),
        [],
        '1.0.0'
    );

    wp_enqueue_script(
        'sample-partners-main',
        get_template_directory_uri() . '/assets/js/main.js',
        [],
        '1.0.0',
        true
    );
}
add_action( 'wp_enqueue_scripts', 'sample_partners_scripts' );

/**
 * お問い合わせフォームの送信処理
 * Contact Form 7 等のプラグインを使用する場合はこの処理を削除してください。
 */
function sample_partners_handle_contact() {
    if ( $_SERVER['REQUEST_METHOD'] !== 'POST' ) {
        return;
    }
    if ( ! isset( $_POST['sample_partners_contact_nonce'] ) ) {
        return;
    }
    if ( ! wp_verify_nonce( $_POST['sample_partners_contact_nonce'], 'sample_partners_contact' ) ) {
        wp_die( 'セキュリティチェックに失敗しました。' );
    }

    $name     = sanitize_text_field( $_POST['contact_name'] ?? '' );
    $company  = sanitize_text_field( $_POST['contact_company'] ?? '' );
    $email    = sanitize_email( $_POST['contact_email'] ?? '' );
    $phone    = sanitize_text_field( $_POST['contact_phone'] ?? '' );
    $category = sanitize_text_field( $_POST['contact_category'] ?? '' );
    $message  = sanitize_textarea_field( $_POST['contact_message'] ?? '' );

    if ( empty( $name ) || empty( $email ) || empty( $category ) || empty( $message ) ) {
        wp_redirect( add_query_arg( 'contact', 'error', home_url( '/#contact' ) ) );
        exit;
    }

    $to      = get_option( 'admin_email' );
    $subject = '[Sample Partners] お問い合わせ: ' . $category;
    $body    = implode( "\n", [
        'お名前: ' . $name,
        '会社名: ' . $company,
        'メールアドレス: ' . $email,
        '電話番号: ' . $phone,
        'お問い合わせ種別: ' . $category,
        '',
        'お問い合わせ内容:',
        $message,
    ] );
    $headers = [
        'Content-Type: text/plain; charset=UTF-8',
        'Reply-To: ' . $name . ' <' . $email . '>',
    ];

    $sent = wp_mail( $to, $subject, $body, $headers );

    wp_redirect( add_query_arg( 'contact', $sent ? 'success' : 'error', home_url( '/#contact' ) ) );
    exit;
}
add_action( 'init', 'sample_partners_handle_contact' );
