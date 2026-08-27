</main>

<footer class="site-footer">

    <div class="footer-wave"></div>

    <div class="footer-content">

        <div class="footer-brand">
            <span class="footer-symbol">✦</span>

            <div>
                <h3>XI REKAYASA PERANGKAT LUNAK</h3>
                <p>
                    SMKN 1 Garut
                </p>
            </div>
        </div>

        <div class="footer-divider"></div>

        <div class="footer-info">
            <p>
                WEBSITE PROFIL KELAS
            </p>

            <span>
                Dibangun menggunakan Laravel
            </span>
        </div>

    </div>

    <div class="footer-bottom">
        <p>
            &copy; {{ date('Y') }} XI RPL • All Rights Reserved
        </p>

        <p class="gold-text">
            ✦ FONTAINE STYLE ✦
        </p>
    </div>

</footer>

<style>

    /* =========================
       FOOTER
    ========================= */

    .site-footer {
        position: relative;
        overflow: hidden;
        background: #0b3d6e;
        color: white;
        border-top: 4px solid #d4af37;
        margin-top: 40px;
    }

    /* Ombak */

    .footer-wave {
        position: absolute;
        top: -50px;
        left: -5%;
        width: 110%;
        height: 100px;
        background: #f8fbff;
        border-radius: 50%;
    }

    .footer-content {
        position: relative;
        z-index: 2;
        max-width: 1200px;
        margin: 0 auto;
        padding: 80px 30px 35px;

        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 30px;
    }

    .footer-brand {
        display: flex;
        align-items: center;
        gap: 15px;
    }

    .footer-symbol {
        display: flex;
        justify-content: center;
        align-items: center;

        width: 48px;
        height: 48px;

        border: 2px solid #d4af37;
        color: #d4af37;

        border-radius: 50%;

        font-size: 20px;
    }

    .footer-brand h3 {
        color: #ffffff;
        font-size: 16px;
        letter-spacing: 1px;
        margin-bottom: 6px;
    }

    .footer-brand p {
        color: #d4af37;
        font-size: 14px;
    }

    .footer-divider {
        width: 1px;
        height: 55px;
        background: rgba(212, 175, 55, 0.5);
    }

    .footer-info {
        text-align: right;
    }

    .footer-info p {
        color: #d4af37;
        font-weight: bold;
        letter-spacing: 2px;
        font-size: 13px;
        margin-bottom: 6px;
    }

    .footer-info span {
        color: #dce9f7;
        font-size: 13px;
    }

    .footer-bottom {
        position: relative;
        z-index: 2;

        display: flex;
        justify-content: space-between;

        padding: 18px 7%;

        border-top: 1px solid rgba(255, 255, 255, 0.15);

        color: #c7d7e8;
        font-size: 12px;
    }

    .gold-text {
        color: #d4af37;
        letter-spacing: 2px;
    }

    @media (max-width: 768px) {

        .footer-content {
            flex-direction: column;
            text-align: center;
            padding-top: 80px;
        }

        .footer-divider {
            width: 80px;
            height: 1px;
        }

        .footer-info {
            text-align: center;
        }

        .footer-bottom {
            flex-direction: column;
            gap: 10px;
            text-align: center;
        }
    }

</style>

</body>
</html>