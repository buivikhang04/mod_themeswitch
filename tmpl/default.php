<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_quicksearch
 * @copyright   Copyright (c) 2025 Bùi Vĩ Khang và Nguyễn Chí Thanh
 * @license     MIT; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>

<?php
$fontSmall = (int) $params->get('font_size_small', 12);
$fontStandard = 13;
$fontLarge = (int) $params->get('font_size_large', 15);
$defaultTheme = $params->get('default_theme', 'light');
?>

<style>
    body {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        background-color: #f0f0f0;
    }

    .customize-wrapper {
        background: #ffffff;
        padding: 20px 30px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        width: fit-content;
    }

    .customize-wrapper h5 {
        margin-top: 0;
        font-size: 18px;
        margin-bottom: 10px;
    }

    .settings-panel {
        display: flex;
        align-items: flex-start;
        gap: 20px;
    }

    .settings-group {
        font-size: 14px;
    }

    .settings-group label {
        display: block;
        margin: 4px 0;
    }

    body.dark-mode {
        background-color: #121212;
        color: #e0e0e0;
    }

    body.light-mode {
        background-color: #ffffff;
        color: #000000;
    }
</style>

<div class="customize-wrapper">
    <h5>Tùy Chỉnh Giao Diện</h5>
    <div class="settings-panel">
        <div class="settings-group">
            <strong>Chữ</strong><br>
            <label><input type="radio" name="fontsize" value="<?php echo $fontSmall; ?>px"> Nhỏ</label>
            <label><input type="radio" name="fontsize" value="<?php echo $fontStandard; ?>px"> Tiêu chuẩn</label>
            <label><input type="radio" name="fontsize" value="<?php echo $fontLarge; ?>px"> Lớn</label>
        </div>

        <div class="settings-group">
            <strong>Màu nền</strong><br>
            <label><input type="radio" name="theme" value="light"> Sáng</label>
            <label><input type="radio" name="theme" value="dark"> Tối</label>
        </div>
    </div>
</div>

<script>
    function setTheme(theme) {
        document.body.classList.remove('light-mode', 'dark-mode');
        if (theme === 'dark') {
            document.body.classList.add('dark-mode');
        } else {
            document.body.classList.add('light-mode');
        }
        localStorage.setItem('theme', theme);
    }

    function setFontSize(size) {
        document.body.style.fontSize = size;
        localStorage.setItem('fontsize', size);
    }

    document.querySelectorAll('input[name="theme"]').forEach(el => {
        el.addEventListener('change', function () {
            setTheme(this.value);
        });
    });

    document.querySelectorAll('input[name="fontsize"]').forEach(el => {
        el.addEventListener('change', function () {
            setFontSize(this.value);
        });
});

    (function () {
        const savedTheme = localStorage.getItem('theme') || '<?php echo $defaultTheme; ?>';
        const savedFontSize = localStorage.getItem('fontsize') || '<?php echo $fontStandard; ?>px';
        setTheme(savedTheme);
        setFontSize(savedFontSize);

        const themeRadio = document.querySelector(`input[name="theme"][value="${savedTheme}"]`);
        if (themeRadio) themeRadio.checked = true;

        const fontRadio = document.querySelector(`input[name="fontsize"][value="${savedFontSize}"]`);
        if (fontRadio) fontRadio.checked = true;
    })();
</script>