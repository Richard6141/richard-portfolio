<?php
// Section Contact
?>
<section class="section" id="contact">
    <div class="section-inner">
        <div class="section-header anim">
            <h2 class="section-title"><?= sanitize($sectionTitle ?: 'Contact') ?></h2>
            <?php if ($sectionSubtitle): ?><p class="section-subtitle"><?= sanitize($sectionSubtitle) ?></p><?php endif; ?>
        </div>
        <div class="contact-grid">
            <!-- Coordonnees -->
            <div class="anim">
                <?php if ($contactInfo['email_public'] ?? ''): ?>
                    <div class="contact-info-item">
                        <div class="contact-info-icon"><svg width="20" height="20" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75"/></svg></div>
                        <div><p style="font-weight:600;font-size:0.875rem">Email</p><a href="mailto:<?= sanitize($contactInfo['email_public']) ?>" style="font-size:0.875rem"><?= sanitize($contactInfo['email_public']) ?></a></div>
                    </div>
                <?php endif; ?>
                <?php if ($contactInfo['phone'] ?? ''): ?>
                    <div class="contact-info-item">
                        <div class="contact-info-icon"><svg width="20" height="20" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z"/></svg></div>
                        <div><p style="font-weight:600;font-size:0.875rem">Telephone</p><a href="tel:<?= sanitize($contactInfo['phone']) ?>" style="font-size:0.875rem"><?= sanitize($contactInfo['phone']) ?></a></div>
                    </div>
                <?php endif; ?>
                <?php if (($contactInfo['city'] ?? '') || ($contactInfo['country'] ?? '')): ?>
                    <div class="contact-info-item">
                        <div class="contact-info-icon"><svg width="20" height="20" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z"/></svg></div>
                        <div><p style="font-weight:600;font-size:0.875rem">Localisation</p><p style="font-size:0.875rem"><?= sanitize(implode(', ', array_filter([$contactInfo['city'], $contactInfo['country']]))) ?></p></div>
                    </div>
                <?php endif; ?>
                <?php if ($contactInfo['availability_hours'] ?? ''): ?>
                    <div class="contact-info-item">
                        <div class="contact-info-icon"><svg width="20" height="20" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/></svg></div>
                        <div><p style="font-weight:600;font-size:0.875rem">Horaires</p><p style="font-size:0.875rem"><?= sanitize($contactInfo['availability_hours']) ?></p></div>
                    </div>
                <?php endif; ?>
                <?php if ($contactInfo['response_time'] ?? ''): ?>
                    <p style="font-size:0.875rem;opacity:0.6;margin-top:0.5rem"><?= sanitize($contactInfo['response_time']) ?></p>
                <?php endif; ?>
                <?php if ($contactInfo['calendly_url'] ?? ''): ?>
                    <a href="<?= sanitize($contactInfo['calendly_url']) ?>" target="_blank" rel="noopener" class="btn btn-outline" style="margin-top:1rem">Prendre rendez-vous</a>
                <?php endif; ?>
            </div>

            <!-- Formulaire -->
            <?php if ($contactInfo['form_enabled'] ?? true): ?>
                <div class="anim">
                    <form class="contact-form" id="contact-form" onsubmit="return submitContactForm(event, <?= $userId ?>)">
                        <div style="display:grid;grid-template-columns:1fr 1fr;gap:1rem" class="form-group">
                            <div><label for="contact-name">Nom *</label><input type="text" id="contact-name" name="name" required maxlength="255"></div>
                            <div><label for="contact-email">Email *</label><input type="email" id="contact-email" name="email" required maxlength="255"></div>
                        </div>
                        <div class="form-group"><label for="contact-subject">Sujet</label><input type="text" id="contact-subject" name="subject" maxlength="255"></div>
                        <div class="form-group"><label for="contact-message">Message *</label><textarea id="contact-message" name="message" rows="5" required maxlength="5000"></textarea></div>
                        <!-- Honeypot -->
                        <div class="hp-field"><label>Ne remplissez pas ce champ</label><input type="text" name="website" tabindex="-1" autocomplete="off"></div>
                        <button type="submit" class="btn btn-primary" style="width:100%;justify-content:center" id="contact-submit">Envoyer le message</button>
                        <div id="contact-feedback" style="margin-top:1rem;text-align:center;font-size:0.875rem"></div>
                    </form>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
