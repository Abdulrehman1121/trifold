<?php
/**
 * Template Name: Contact & Project Planner
 *
 * @package Trifold
 */

get_header();

$contact_email = get_theme_mod( 'trifold_contact_email', 'hello@trifold.agency' );
?>

<main id="primary" class="site-main" style="padding-top: 140px; padding-bottom: 120px;">
  <div class="container">
    <div class="text-center" style="margin-bottom: 56px;">
      <span class="kicker"><?php esc_html_e( 'Interactive Project Planner', 'trifold' ); ?></span>
      <h1 style="font-size: var(--font-size-display); line-height: 0.95; letter-spacing: -0.04em; margin-bottom: 16px;">
        LET'S UNFOLD IT.
      </h1>
      <p style="font-size: var(--font-size-lead); max-width: 600px; margin: 0 auto; color: var(--color-text-muted);">
        Complete this quick 6-step project brief. It takes two minutes and helps us understand your vision before our first discussion.
      </p>
    </div>

    <!-- Interactive 6-Step Planner Box -->
    <div class="project-planner-box">
      <!-- Progress Stepper Tabs -->
      <div class="planner-progress-bar">
        <div class="planner-step-tab active" data-step="1">
          <div class="planner-step-circle">1</div>
          <span>Services</span>
        </div>
        <div class="planner-step-tab" data-step="2">
          <div class="planner-step-circle">2</div>
          <span>Business</span>
        </div>
        <div class="planner-step-tab" data-step="3">
          <div class="planner-step-circle">3</div>
          <span>Objectives</span>
        </div>
        <div class="planner-step-tab" data-step="4">
          <div class="planner-step-circle">4</div>
          <span>Budget</span>
        </div>
        <div class="planner-step-tab" data-step="5">
          <div class="planner-step-circle">5</div>
          <span>Timeline</span>
        </div>
        <div class="planner-step-tab" data-step="6">
          <div class="planner-step-circle">6</div>
          <span>Details</span>
        </div>
      </div>

      <!-- Step 1: Services -->
      <div class="planner-step-panel active" data-step="1" data-multi="true">
        <h2 style="font-size: 1.6rem; font-weight: 800; margin-bottom: 8px;">01. What does your project need?</h2>
        <p style="font-size: 0.95rem; color: #666;">Select all disciplines that apply to your upcoming goals.</p>
        <div class="planner-options-grid">
          <div class="planner-option-card">
            <h3 style="font-size: 1.15rem; font-weight: 700;">Brand Identity</h3>
            <p style="font-size: 0.85rem; color: #777;">Strategy, logo, typography &amp; visual system</p>
          </div>
          <div class="planner-option-card">
            <h3 style="font-size: 1.15rem; font-weight: 700;">Website Development</h3>
            <p style="font-size: 0.85rem; color: #777;">Custom WordPress / Elementor digital experience</p>
          </div>
          <div class="planner-option-card">
            <h3 style="font-size: 1.15rem; font-weight: 700;">Graphic Design</h3>
            <p style="font-size: 0.85rem; color: #777;">Social media, collateral, pitch presentations</p>
          </div>
          <div class="planner-option-card">
            <h3 style="font-size: 1.15rem; font-weight: 700;">Brand + Website</h3>
            <p style="font-size: 0.85rem; color: #777;">Seamless unified identity &amp; web platform</p>
          </div>
          <div class="planner-option-card">
            <h3 style="font-size: 1.15rem; font-weight: 700;">Complete Trifold System</h3>
            <p style="font-size: 0.85rem; color: #777;">Identity, website, and everyday collateral</p>
          </div>
          <div class="planner-option-card">
            <h3 style="font-size: 1.15rem; font-weight: 700;">Other / Consulting</h3>
            <p style="font-size: 0.85rem; color: #777;">Website optimization, redesign or advice</p>
          </div>
        </div>
      </div>

      <!-- Step 2: Business -->
      <div class="planner-step-panel" data-step="2">
        <h2 style="font-size: 1.6rem; font-weight: 800; margin-bottom: 8px;">02. Tell us about your business</h2>
        <p style="font-size: 0.95rem; color: #666;">Help us understand who you are and what sector you operate in.</p>
        <div style="margin-top: 24px;">
          <label style="font-weight: 600; font-size: 0.9rem;">Company / Brand Name</label>
          <input type="text" id="planner-company" class="planner-input" placeholder="e.g. Acme Studio">
        </div>
        <div style="margin-top: 20px;">
          <label style="font-weight: 600; font-size: 0.9rem;">Industry Sector</label>
          <input type="text" id="planner-industry" class="planner-input" placeholder="e.g. Architecture, Technology, Healthcare">
        </div>
        <div style="margin-top: 20px;">
          <label style="font-weight: 600; font-size: 0.9rem;">Current Website (if existing)</label>
          <input type="url" id="planner-site" class="planner-input" placeholder="https://example.com">
        </div>
      </div>

      <!-- Step 3: Objective -->
      <div class="planner-step-panel" data-step="3" data-multi="false">
        <h2 style="font-size: 1.6rem; font-weight: 800; margin-bottom: 8px;">03. What are you trying to achieve?</h2>
        <p style="font-size: 0.95rem; color: #666;">Choose your primary business milestone.</p>
        <div class="planner-options-grid">
          <div class="planner-option-card selected">
            <h3 style="font-size: 1.15rem; font-weight: 700;">Launching a New Venture</h3>
            <p style="font-size: 0.85rem; color: #777;">Establishing clear market presence from scratch</p>
          </div>
          <div class="planner-option-card">
            <h3 style="font-size: 1.15rem; font-weight: 700;">Strategic Rebrand</h3>
            <p style="font-size: 0.85rem; color: #777;">Repositioning to command higher value &amp; authority</p>
          </div>
          <div class="planner-option-card">
            <h3 style="font-size: 1.15rem; font-weight: 700;">Digital Redesign &amp; Speed</h3>
            <p style="font-size: 0.85rem; color: #777;">Upgrading outdated web experience &amp; conversions</p>
          </div>
        </div>
      </div>

      <!-- Step 4: Budget Range -->
      <div class="planner-step-panel" data-step="4" data-multi="false">
        <h2 style="font-size: 1.6rem; font-weight: 800; margin-bottom: 8px;">04. Anticipated Investment Tier</h2>
        <p style="font-size: 0.95rem; color: #666;">This allows us to calibrate scope, deliverables and timelines realistically.</p>
        <div class="planner-options-grid">
          <div class="planner-option-card">
            <h3 style="font-size: 1.25rem; font-weight: 800;">$5k – $10k</h3>
            <p style="font-size: 0.85rem; color: #777;">Focused identity or high-impact digital launchpad</p>
          </div>
          <div class="planner-option-card selected">
            <h3 style="font-size: 1.25rem; font-weight: 800;">$10k – $25k</h3>
            <p style="font-size: 0.85rem; color: #777;">Comprehensive brand identity &amp; custom website</p>
          </div>
          <div class="planner-option-card">
            <h3 style="font-size: 1.25rem; font-weight: 800;">$25k – $50k+</h3>
            <p style="font-size: 0.85rem; color: #777;">Enterprise multi-discipline system &amp; bespoke platform</p>
          </div>
        </div>
      </div>

      <!-- Step 5: Timeline -->
      <div class="planner-step-panel" data-step="5" data-multi="false">
        <h2 style="font-size: 1.6rem; font-weight: 800; margin-bottom: 8px;">05. Target Completion Timeline</h2>
        <p style="font-size: 0.95rem; color: #666;">When would you ideally like this project live?</p>
        <div class="planner-options-grid">
          <div class="planner-option-card">
            <h3 style="font-size: 1.15rem; font-weight: 700;">Within 1 Month</h3>
            <p style="font-size: 0.85rem; color: #777;">Rapid sprint deployment</p>
          </div>
          <div class="planner-option-card selected">
            <h3 style="font-size: 1.15rem; font-weight: 700;">2 – 3 Months</h3>
            <p style="font-size: 0.85rem; color: #777;">Standard considered review process</p>
          </div>
          <div class="planner-option-card">
            <h3 style="font-size: 1.15rem; font-weight: 700;">Flexible</h3>
            <p style="font-size: 0.85rem; color: #777;">Quality &amp; strategic depth prioritized</p>
          </div>
        </div>
      </div>

      <!-- Step 6: Contact Details -->
      <div class="planner-step-panel" data-step="6">
        <h2 style="font-size: 1.6rem; font-weight: 800; margin-bottom: 8px;">06. Your Details &amp; Notes</h2>
        <p style="font-size: 0.95rem; color: #666;">Where should we send our initial project notes and discussion availability?</p>
        <div style="margin-top: 24px;">
          <label style="font-weight: 600; font-size: 0.9rem;">Your Full Name *</label>
          <input type="text" id="planner-name" class="planner-input" placeholder="e.g. Alex Morgan" required>
        </div>
        <div style="margin-top: 20px;">
          <label style="font-weight: 600; font-size: 0.9rem;">Work Email Address *</label>
          <input type="email" id="planner-email" class="planner-input" placeholder="alex@company.com" required>
        </div>
        <div style="margin-top: 20px;">
          <label style="font-weight: 600; font-size: 0.9rem;">Additional Project Notes</label>
          <textarea id="planner-notes" class="planner-input" rows="4" placeholder="Tell us anything else relevant about your goals or challenges..."></textarea>
        </div>
      </div>

      <!-- Summary / Confirmation Box (Hidden by default) -->
      <div class="planner-summary-box" style="display: none;"></div>

      <!-- Navigation Buttons -->
      <div class="planner-nav-btns">
        <button type="button" class="btn btn-outline planner-prev-btn">← Previous Step</button>
        <div>
          <button type="button" class="btn btn-primary planner-next-btn">Next Step →</button>
          <button type="button" class="btn btn-vermilion planner-submit-btn" style="display: none;">Submit Project Brief ✓</button>
        </div>
      </div>
    </div>

    <?php
    // If standard page content exists (e.g. added via WordPress editor or Elementor)
    while ( have_posts() ) : the_post();
        if ( get_the_content() ) :
            echo '<div class="page-editorial-content" style="margin-top: 60px;">';
            the_content();
            echo '</div>';
        endif;
    endwhile;
    ?>

    <!-- Direct Contact Info Strip -->
    <div style="margin-top: 80px; text-align: center;">
      <p style="font-size: var(--font-size-lead); color: var(--color-ink);">Prefer an immediate email or direct discussion?</p>
      <p style="font-size: 1.25rem; font-weight: 700; margin-top: 8px;">
        <a href="mailto:<?php echo esc_attr( $contact_email ); ?>" style="color: var(--color-vermilion);"><?php echo esc_html( $contact_email ); ?></a>
      </p>
    </div>
  </div>
</main>

<?php
get_footer();
