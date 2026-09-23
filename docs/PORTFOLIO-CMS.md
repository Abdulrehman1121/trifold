# Portfolio CMS & Attribution Governance — Trifold v1.0.0

## 1. Mandatory Attribution Governance

To ensure brand honesty and client trust, speculative descriptions and fabricated performance claims are strictly prohibited.

### Attribution Rules:
1. **Unconfirmed Contributions**: If a project's exact contribution is not confirmed by the client, it must display:
   ```text
   Contribution: To be confirmed
   ```
2. **Approved Contribution List**:
   * *Designed by Trifold*
   * *Developed by Trifold*
   * *Brand Identity by Trifold*
   * *Design + Development*
   * *Development only*
   * *Design only*
   * *Concept Project*
   * *Other*
3. **Concept Projects**: All self-initiated studio explorations must visibly display the `CONCEPT PROJECT` stamp and include the standard concept disclaimer.
4. **Zero Fabricated Metrics**: No invented revenue statistics, conversion percentages, awards, or fake testimonials may be published. If case study data is unavailable, leave the field empty in the CMS and the template will conditionally hide that section.

---

## 2. Managing Projects in WordPress Admin

### Adding a New Project
1. Go to **Projects → Add New Project**.
2. Enter the title (e.g. *Sumus*).
3. Set the **Featured Image** (used on the Work grid and carousel).
4. Fill in the **Trifold Project Specifications** meta box:
   * **Client**: Name of the client company.
   * **Industry**: Sector (e.g. *Sustainability*, *Metaverse*, *Luxury*).
   * **Country**: Location (e.g. *United Kingdom*, *United States*).
   * **Year**: Year of delivery (e.g. *2026*).
   * **Live Project URL**: External website link (if public).
   * **Contribution**: Select the approved contribution from the dropdown.
   * **Desktop Image URL**: Path or media URL to SVG/PNG browser mockup.
   * **Mobile Image URL**: Path or media URL to mobile mockup.
   * **The Challenge**: Editorial background (optional).
   * **The Approach**: Strategy and design direction (optional).
5. Assign taxonomies in the right sidebar:
   * **Project Services**: *Websites*, *Brand Identity*, *Graphic Design*.
   * **Industries**: Categorization.
6. Click **Publish**.

### Featuring a Project on the Homepage Carousel
* In the project editor, check `[x] Featured on Homepage Cinematic Carousel`.
* Set the numeric sort order in **Portfolio Sort Order** (`1`, `2`, `3`).
