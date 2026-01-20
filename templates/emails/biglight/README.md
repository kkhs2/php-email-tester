# Booker Emails

A collection of modular, component-based HTML email templates for Booker, built using [Parcel.io](https://parcel.io/) templating. This system enables maintainable, reusable and brand-consistent transactional and marketing emails.

## 📁 Folder Structure

```
emails/
├── components/   # Reusable email components (e.g., headers, footers, blocks)
├── templates/    # Complete email templates (using Parcel.io syntax)
├── html/         # Output: compiled HTML emails (ready to send)
└── README.md     # This documentation
```

### Example

```
emails/
├── components/
│   ├── b-footer.parcel
│   ├── header-menu.parcel
│   └── ...
├── templates/
│   ├── 1-Delivery-Trolley.parcel
│   ├── 2-market-supplier-order-confirmation.parcel
│   └── ...
├── html/
│   ├── 1-Delivery-Trolley.html
│   ├── 2-market-supplier-order-confirmation.html
│   └── ...
```

## 🧩 Component-Based Email Development

- **Components** (`components/`):

  - Small, reusable blocks (e.g., footers, CTAs, product rows).
  - Use custom tags in templates, e.g. `<b-footer></b-footer>`.
  - Promotes DRY and consistent design.

- **Templates** (`templates/`):

  - Full email layouts, composed from components.
  - Use Parcel.io syntax for logic, variables and includes.
  - Example:
    ```html
    <header-menu></header-menu>
    <text-block
      paragraphs="[ 'Hello, [Name]!', 'Welcome to Booker.' ]"
    ></text-block>
    <b-footer></b-footer>
    ```

- **HTML Output** (`html/`):
  - Compiled, production-ready HTML files for each template.
  - These are what you can you straight in your email system.

## 🚀 Workflow

1. **Edit or create components** in `components/` for reusable blocks.
2. **Build templates** in `templates/` using components and Parcel.io logic.
3. **Compile templates** to HTML using Parcel.io (see below).
4. **Send or preview** the output HTML from `html/`.

## 🔄 Adapting to Other Frameworks

- The component-based approach is framework-agnostic.
- You can migrate these templates to other email frameworks (e.g., MJML, React Email, etc.) by:
  - Rewriting components in the new syntax.
  - Maintaining the modular structure for reusability.
- The HTML output is standard and can be used in any email delivery system.

## 📚 Tips & Best Practices

- **Test output HTML** in major email clients (Outlook, Gmail, Apple Mail, etc.).
- **Keep components small** and focused for maximum reusability.
- **Document** any new components or templates in this README.
- **Avoid inline scripts** and use inline CSS for best compatibility.
