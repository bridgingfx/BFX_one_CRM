<!-- Lucide Icons -->
<script src="https://unpkg.com/lucide@latest/dist/umd/lucide.js"></script>

<div class="promo-bar mb-4">
    <div class="promo-track" id="promoTrack">
        <div class="promo-item">
            <i data-lucide="sparkles"></i> GET INSTA FUNDED — REAL FUNDS — NO RULES
        </div>

        <div class="promo-item">
            <i data-lucide="trending-up"></i> 0% PROFIT SPLIT ON ALL FTMO PACKAGES
        </div>

        <div class="promo-item">
            <i data-lucide="gift"></i> SUPER BONUS: CLAIM 20% EXTRA ON FIRST PURCHASE
        </div>

        <div class="promo-item">
            <i data-lucide="shield-check"></i> VERIFIED TRADING PROTECTION ENABLED
        </div>
    </div>
</div>

<script>
document.addEventListener("DOMContentLoaded", () => {
    lucide.createIcons();

    // Duplicate items for infinite scroll effect
    const track = document.getElementById("promoTrack");
    const clone = track.cloneNode(false);
    track.after(clone);
});
</script>

