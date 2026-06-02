<p align="center">
  <a href="https://www.apespetcare.org.uk/" target="_blank" rel="noopener noreferrer">
    <img src="https://www.apes.org.uk/APES_logo_3D_440x250.png" alt="APES CIC Logo" width="220">
  </a>
</p>

<h1 align="center">APES Pet Care Clinic Website</h1>

<p align="center">
  <strong>Website development and maintenance repository for APES Pet Care Clinic, part of the Association of Protecting Exotic Species CIC.</strong>
</p>

<p align="center">
  <a href="https://www.apespetcare.org.uk/"><img alt="Website" src="https://img.shields.io/badge/apespetcare.org.uk-live-1B5E20"></a>
  <img alt="Repository" src="https://img.shields.io/badge/repository-GitHub-2E7D32">
  <img alt="Status" src="https://img.shields.io/badge/status-active_maintenance-2E7D32">
  <img alt="Theme" src="https://img.shields.io/badge/theme-APES_Habitat-43A047">
  <img alt="Accessibility" src="https://img.shields.io/badge/accessibility-WCAG_AA_target-00796B">
  <img alt="UK English" src="https://img.shields.io/badge/language-UK_English-00695C">
</p>

---

## 🌿 Project purpose

The **APES Pet Care Clinic Website** repository supports the development, maintenance and continuous improvement of the public website at <https://www.apespetcare.org.uk/>.

The website exists to help pet owners, particularly people on low incomes or no income, understand the support available through APES Pet Care Clinic. It should clearly explain routine care, non emergency advice, first aid style support, care plans, lab services, bookings, referrals and routes into wider APES CIC services.

Primary goals:

* Present APES Pet Care Clinic as a clear, trusted and welfare focused service.
* Help pet owners find appropriate support for dogs, cats, reptiles, invertebrates, rabbits, guinea pigs, ferrets and other animals supported by APES.
* Make bookings, service information, policies and contact routes easy to find.
* Clearly explain that APES Pet Care Clinic is not a veterinary practice and does not replace veterinary treatment where required.
* Support responsible, non judgemental animal welfare advice for people facing financial hardship.
* Keep public content consistent with APES CIC branding, accessibility standards and UK compliance expectations.

---

## 🐾 Service areas

The site should be structured around user needs and clear service journeys.

| Area | Purpose |
|---|---|
| **Home** | Introduce APES Pet Care Clinic, its purpose and key support routes. |
| **General Services** | Explain routine support, consultations, health checks and non emergency advice. |
| **Care Services** | Provide species specific care guidance and service pages. |
| **Care Plans** | Explain available health care plans, what they include and how users can access them. |
| **Lab Services** | Present faecal testing and other laboratory support clearly. |
| **Bookings** | Provide a simple route to book clinic services or consultations. |
| **News and Events** | Share service updates, educational content and community activity. |
| **Policies** | Make privacy, terms, bookings and refund policies easy to find. |
| **Contact** | Help users contact or find APES Pet Care Clinic quickly. |
| **APES Network** | Connect users to APES CIC, APES Shelter, APES Pet Shop, MyAPES and related services. |

---

## 🎨 Design direction

The website should use the **APES Habitat** direction: green led, accessible, welfare focused and recognisably APES.

### Brand principles

* **Mission led:** connect content back to animal welfare, responsible care and support for people in hardship.
* **Clear and practical:** visitors should quickly understand what APES Pet Care Clinic can and cannot do.
* **Friendly and non judgemental:** language should reduce fear, shame or confusion for pet owners seeking help.
* **Accessible by default:** pages must use readable typography, strong contrast, semantic headings and keyboard accessible navigation.
* **Reusable:** cards, service panels, status chips, booking calls to action and policy links should use shared components where possible.

### Suggested colour tokens

| Token | Suggested use |
|---|---|
| **Forest Green** | Header, footer, primary navigation and trust based sections. |
| **Leaf Green** | Primary buttons, success states, welfare highlights and active indicators. |
| **Mint** | Soft background panels, service cards and low pressure information blocks. |
| **Teal** | Clinic operations, care guidance and service route cards. |
| **Sky Blue** | Pet care education, advice panels and help content. |
| **Warm Sand** | Calm page background accents and content breaks. |
| **Coral / Orange** | Important notices, booking prompts and non critical warnings. |

---

## 🧩 Recommended repository structure

The exact structure may vary depending on the framework, but the repository should stay predictable and easy to maintain.

```text
.
├── .github/
│   ├── ISSUE_TEMPLATE/
│   │   ├── bug_report.md
│   │   ├── feature_request.md
│   │   ├── content_update.md
│   │   ├── accessibility_issue.md
│   │   ├── security_privacy.md
│   │   └── compliance_governance.md
│   ├── workflows/
│   │   ├── ci.yml
│   │   └── deploy.yml
│   ├── pull_request_template.md
│   └── dependabot.yml
├── docs/
│   ├── accessibility/
│   ├── architecture/
│   ├── brand/
│   ├── compliance/
│   └── decisions/
├── public/
│   └── assets/
│       ├── images/
│       └── logo/
├── src/
│   ├── components/
│   ├── config/
│   ├── content/
│   ├── features/
│   ├── layouts/
│   ├── pages/
│   ├── services/
│   ├── styles/
│   └── utils/
├── tests/
│   ├── accessibility/
│   ├── integration/
│   └── unit/
├── CODE_OF_CONDUCT.md
├── CONTRIBUTING.md
├── CHANGELOG.md
├── LICENSE
├── README.md
└── SECURITY.md
```

---

## 🚀 Getting started

> Replace these commands with the confirmed project stack once the framework and package manager are finalised.

### 1. Clone the repository

```bash
git clone <repository-url>
cd apes-pet-care-clinic-website
```

### 2. Install dependencies

```bash
npm install
```

### 3. Create the local environment file

```bash
cp .env.example .env.local
```

### 4. Start the development server

```bash
npm run dev
```

### 5. Run checks before committing

```bash
npm run lint
npm run test
npm run build
```

---

## 🔐 Environment variables

Do not commit secrets, credentials, API tokens, payment keys, booking system credentials or live service keys.

Document required variables in `.env.example` using safe placeholder values only.

| Variable | Purpose | Required | Example |
|---|---|---:|---|
| `APP_ENV` | Application environment. | Yes | `local` |
| `APP_URL` | Local or deployed application URL. | Yes | `http://localhost:3000` |
| `PUBLIC_SITE_URL` | Public website URL. | Yes | `https://www.apespetcare.org.uk` |
| `BOOKINGS_URL` | Booking route or external booking system URL. | If used | `https://www.apespetcare.org.uk/bookings` |
| `STRIPE_BILLING_PORTAL_URL` | Client billing portal URL. | If used | `https://billing.stripe.com/...` |
| `NEWSLETTER_SIGNUP_URL` | Newsletter signup route or external provider URL. | If used | `https://www.apesnews.org.uk/...` |
| `CONTACT_EMAIL` | Public contact email. | Yes | `info@apespetcare.org.uk` |
| `CONTACT_PHONE` | Public contact number. | Yes | `0300 302 0228` |

---

## 🛠 GitHub workflow

### Branch naming

Use short, descriptive branch names.

```text
feature/service-card-layout
feature/care-plans-page
feature/booking-flow-update
feature/lab-services-content
fix/mobile-navigation-overflow
fix/accessibility-focus-state
docs/update-policy-links
hotfix/contact-details
```

### Commit style

Use clear commit messages that explain the change and the reason.

```text
Add care services landing page
Update booking policy links
Fix mobile header navigation
Improve contrast on service cards
Document lab services content model
```

### Issues

Use GitHub Issues for planned changes, bugs, content work, accessibility improvements, governance tasks and maintenance items.

Every issue should include:

* Summary of the problem or requested change.
* User or operational need.
* Acceptance criteria.
* Relevant page, route or component.
* Screenshots or examples where helpful.
* Accessibility, security, data protection or compliance considerations.
* Priority and owner where known.

Recommended issue templates live in:

```text
.github/ISSUE_TEMPLATE/
```

### Pull requests

Every pull request should include:

* Summary of the change.
* Linked issue, using `Closes #123` where appropriate.
* Reason for the change.
* Screenshots or screen recordings for user interface changes.
* Accessibility considerations.
* Security and data protection considerations.
* Testing completed.
* Deployment and rollback notes where relevant.

Recommended pull request template:

```text
.github/pull_request_template.md
```

### GitHub Actions

Use GitHub Actions for repeatable checks and safe deployment workflows.

Suggested checks:

* Install dependencies.
* Run linting.
* Run unit and integration tests.
* Run build checks.
* Run accessibility checks where tooling is available.
* Run dependency and security checks.
* Deploy only from protected branches or approved environments.

---

## ✅ Definition of done

A feature is not ready to merge until it meets the relevant checklist.

### Functional quality

* [ ] Feature meets the agreed acceptance criteria.
* [ ] User facing copy is clear, accurate and written in UK English.
* [ ] Pages explain APES Pet Care Clinic services without overstating clinical or veterinary capability.
* [ ] Empty, loading, success and error states are handled.
* [ ] Mobile, tablet and desktop layouts have been checked.
* [ ] Links, buttons, forms and booking routes behave as expected.
* [ ] Public contact details are accurate.

### Accessibility

* [ ] Normal text meets at least **4.5:1** contrast.
* [ ] Large text and meaningful graphical elements meet at least **3:1** contrast where applicable.
* [ ] Colour is not the only method used to show meaning, status or urgency.
* [ ] Keyboard focus is visible and logical.
* [ ] Form fields have labels, helper text and error messages.
* [ ] Images and icons have suitable accessible names or alternative text.
* [ ] Motion is minimal and respects reduced motion preferences.
* [ ] Pages use one clear `h1` and logical `h2` and `h3` sections.

### Data protection and security

* [ ] No secrets, credentials, payment keys, personal data or confidential records are committed.
* [ ] Form submissions collect only necessary information.
* [ ] Personal data is handled in line with UK GDPR and the Data Protection Act 2018.
* [ ] Client, supporter, staff, volunteer, welfare, safeguarding, HR, finance and governance data are treated as sensitive by default.
* [ ] Logs do not expose personal data, booking details or confidential case information.
* [ ] External links use safe attributes where applicable.

### Service and compliance accuracy

* [ ] Content makes clear where veterinary treatment is required or may be required.
* [ ] Content does not imply APES Pet Care Clinic is a veterinary practice unless that status changes and is formally approved.
* [ ] Prices, bookings, care plan details and refund wording are reviewed before publication.
* [ ] Policy, service, finance or governance content has an identified owner.
* [ ] Legal, safeguarding or data protection changes have been reviewed by the appropriate lead.
* [ ] Changes align with APES CIC operational standards and UK compliance expectations.

---

## 🧪 Testing expectations

Use the strongest practical test coverage for the type of change.

| Change type | Expected checks |
|---|---|
| UI component | Unit tests, keyboard check, responsive check, contrast check. |
| Service page | Content accuracy review, mobile review, link check and metadata check. |
| Form or booking workflow | Validation tests, error state tests, success state tests and data minimisation review. |
| Content update | Link check, spelling check, owner check and review date check. |
| Policy update | Legal or governance review, version check and publication date check. |
| Payment or billing link | Security review, test mode check and confirmation that no secret key is exposed. |
| Data handling | Input validation, output escaping, logging review and retention considerations. |

---

## 🧯 Priority issue types

Use the correct GitHub issue template so triage is faster.

| Issue type | Use when |
|---|---|
| **Bug report** | Something is broken or behaving unexpectedly. |
| **Feature request** | A new website function, service page or user journey is needed. |
| **Content update** | The change is primarily wording, guidance, links or document structure. |
| **Accessibility issue** | The change affects readability, keyboard use, contrast, forms or assistive technology. |
| **Security / privacy** | The change affects access control, personal data, payment links, logs or confidential information. |
| **Compliance / governance** | The change relates to policies, terms, refunds, bookings, company details or statutory wording. |

---

## 🧱 Component standards

Reusable components should be preferred over one off layouts.

Recommended component families:

* Service cards.
* Species care cards.
* Booking call to action panels.
* Alert and advice banners.
* Care plan summary cards.
* Lab service panels.
* Policy and document lists.
* Status chips.
* Contact blocks.
* Newsletter signup blocks.
* Empty states with APES themed illustrations.

Component requirements:

* Use shared design tokens.
* Support keyboard interaction.
* Avoid hard coded colours where a token exists.
* Include accessible names for icons and controls.
* Work on mobile, tablet and desktop widths.
* Keep veterinary limitation wording clear where relevant.
* Document important props, variants and usage constraints.

---

## 📚 Documentation standards

Keep documentation close to the code and update it in the same pull request as the relevant change.

Recommended documents:

| Document | Purpose |
|---|---|
| `docs/architecture/overview.md` | System overview, major services and integration points. |
| `docs/brand/theme-guide.md` | APES Habitat theme, logo usage, colour tokens and component rules. |
| `docs/accessibility/checklist.md` | Accessibility testing workflow and acceptance checks. |
| `docs/compliance/data-protection.md` | Data handling, privacy and retention notes. |
| `docs/compliance/service-wording.md` | Rules for clinic, veterinary limitation and public service wording. |
| `docs/content/service-pages.md` | Content model for service pages, species pages and booking calls to action. |
| `docs/decisions/` | Architecture decision records and reasoning. |
| `SECURITY.md` | How to report security concerns safely. |
| `CONTRIBUTING.md` | Contributor expectations and development workflow. |
| `CODE_OF_CONDUCT.md` | Conduct expectations for contributors and collaborators. |

---

## 🛡 Security and responsible disclosure

Do not open public issues containing:

* Credentials, API keys or tokens.
* Personal data.
* Safeguarding details.
* Animal welfare case details.
* Client booking records.
* Payment or billing details.
* Vulnerability exploit steps that could create immediate risk.
* HR, finance, governance or legal correspondence.

Report sensitive concerns through the approved APES internal route or by contacting the responsible lead directly.

For repository security guidance, maintain a separate `SECURITY.md` file and use GitHub private vulnerability reporting where enabled.

---

## 🤖 Dependabot and dependency maintenance

Use Dependabot or an approved dependency management workflow to keep dependencies reviewed and current.

Recommended rules:

* Group low risk development dependency updates where appropriate.
* Review security updates promptly.
* Test all dependency updates before merging.
* Do not auto merge changes that affect authentication, payments, bookings, data handling or deployment without review.
* Record any breaking change decisions in `docs/decisions/`.

---

## 🔒 Branch protection

Protect the default branch and any production deployment branches.

Recommended settings:

* Require pull requests before merging.
* Require at least one approving review.
* Require status checks to pass.
* Require branches to be up to date before merging where practical.
* Restrict who can push to protected branches.
* Prevent force pushes and deletion of protected branches.
* Require signed commits where organisational policy requires it.

---

## 🧑‍🤝‍🧑 Contributors and access

This repository is intended for authorised APES CIC directors, staff, volunteers, contractors and approved collaborators.

Access should follow least privilege principles:

* Give users the minimum role needed for their work.
* Remove access when a role ends or no longer requires repository access.
* Protect the default branch.
* Require pull request review for material changes.
* Treat client, welfare, safeguarding, finance, HR and governance information as sensitive by default.

---

## 📈 Roadmap themes

Current development and maintenance should prioritise:

1. **Service clarity:** improve service pages so users understand what help is available and when a vet is required.
2. **Booking journey:** make booking routes, eligibility information and expectations easier to follow.
3. **Species specific guidance:** expand and maintain clear care pages for supported animals.
4. **Policy visibility:** keep privacy, terms, bookings and refund policies easy to find.
5. **Accessibility and mobile quality:** ensure the site works well for users on phones and assistive technology.
6. **Content governance:** keep pricing, service limits, contact details and policy wording current.
7. **APES network links:** maintain clear routes to APES CIC, APES Shelter, APES Pet Shop, MyAPES and related services.

---

## 📏 Success measures

The website should be judged by practical outcomes.

| Measure | Target |
|---|---|
| Service clarity | Users can understand available support and limitations without needing to call first. |
| Booking completion | Users can find the correct booking route quickly. |
| Policy visibility | Privacy, terms, booking and refund information is easy to locate. |
| Accessibility | Core pages pass WCAG AA contrast and keyboard checks. |
| Mobile usability | Core journeys are usable on phones. |
| Content accuracy | Service, contact and policy information remains current. |
| Welfare impact | More pet owners are guided towards appropriate care, advice or veterinary support. |

---

## 🏢 Organisation

**Association of Protecting Exotic Species CIC (APES CIC)**  
CIC No: `16253848`  
Registered Office: `40 Morris Street, St Helens, WA9 3EN`  
Main Website: <https://www.apes.org.uk/>  
Pet Care Clinic Website: <https://www.apespetcare.org.uk/>  
Pet Care Clinic Email: `info@apespetcare.org.uk`  
Pet Care Clinic Telephone: `0300 302 0228`

---

## 📄 Licence and reuse

This repository and its contents are maintained for APES CIC website development, public service delivery and authorised operational purposes.

Unless a separate licence file states otherwise, do not reuse APES CIC branding, public service materials, internal documents, source code, operational workflows or service materials outside authorised APES CIC purposes.

---

<p align="center">
  <strong>Built to support people, protect animals and keep APES Pet Care Clinic clear, compliant and accessible.</strong>
</p>
