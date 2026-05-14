# BetPro Styled Article Prompt

Use this prompt when you give AI a rough article and want clean WordPress post content using the styled markup/classes used by the BetPro single post design.

The WordPress theme already renders the hero title, date, category, author card, tags, and More Articles section. The AI should only return the content that goes inside the post editor.

## Copy This Prompt

```text
You are formatting a WordPress blog article for the BetPro Account website.

I will give you rough text, notes, or an article draft. Rewrite it into polished, useful, human-sounding post content and output it as styled HTML that I can paste directly into the WordPress post editor.

Critical output rules:
- Do not output Markdown.
- Do not wrap the answer in triple backticks.
- Do not add explanations before or after the final answer.
- Do not add the page header, site header, footer, author box, comments, tags, or recommended posts.
- Do not add an <h1>. The WordPress post title is already the hero H1.
- Output SEO fields first, then the styled WordPress Body HTML.
- The WordPress Body HTML must use the exact styled markup pattern below.
- Use Tailwind-style utility classes exactly as shown.
- Use <section> blocks for each main article section.
- Use a styled intro paragraph at the top.
- Use a styled final thought box at the end.
- Keep paragraphs clear, direct, and useful.
- Avoid generic filler, hype, repeated points, fake statistics, and unsafe claims.
- If numbers or research are not provided by me, do not invent exact data.
- Do not mention illegal bypassing, fake documents, fraud, or guaranteed profit.
- For betting topics, keep the tone educational, practical, and responsible.

Required output format:

SEO Title:
[clear SEO title]

Slug:
[short-url-slug]

Meta Description:
[under 155 characters]

Category:
[best category]

Tags:
[5 to 8 comma-separated tags]

WordPress Body HTML:
<div class="space-y-10">
    <p class="text-lg text-muted-foreground leading-relaxed border-l-2 border-primary/40 pl-5 italic">[Strong intro paragraph. Make it useful immediately. No boring opening.]</p>

    <section class="mb-10">
        <h2 class="text-xl md:text-2xl font-extrabold mb-4 text-foreground">[Section heading]</h2>
        <p class="text-muted-foreground leading-relaxed">[Useful paragraph.]</p>
        <p class="text-muted-foreground leading-relaxed">[Optional second paragraph if needed.]</p>
    </section>

    <section class="mb-10">
        <h2 class="text-xl md:text-2xl font-extrabold mb-4 text-foreground">[Section heading]</h2>
        <p class="text-muted-foreground leading-relaxed">[Useful paragraph.]</p>
    </section>

    <div class="mt-12 p-6 rounded-2xl bg-primary/5 border border-primary/15">
        <h3 class="font-extrabold text-lg mb-3 text-foreground">Final Thoughts</h3>
        <p class="text-muted-foreground leading-relaxed">[Clear final advice or summary. No hype.]</p>
    </div>
</div>

Allowed styled blocks:

Main wrapper:
<div class="space-y-10">...</div>

Intro paragraph:
<p class="text-lg text-muted-foreground leading-relaxed border-l-2 border-primary/40 pl-5 italic">...</p>

Normal section:
<section class="mb-10">
    <h2 class="text-xl md:text-2xl font-extrabold mb-4 text-foreground">...</h2>
    <p class="text-muted-foreground leading-relaxed">...</p>
</section>

Subheading inside a section:
<h3 class="font-extrabold text-lg mt-6 mb-3 text-foreground">...</h3>
<p class="text-muted-foreground leading-relaxed">...</p>

Bullet list:
<ul class="space-y-3 text-muted-foreground leading-relaxed">
    <li><strong class="text-foreground">Point name:</strong> Helpful explanation.</li>
    <li><strong class="text-foreground">Point name:</strong> Helpful explanation.</li>
</ul>

Numbered list:
<ol class="space-y-3 text-muted-foreground leading-relaxed list-decimal pl-5">
    <li>Step one explanation.</li>
    <li>Step two explanation.</li>
</ol>

Important note box:
<div class="p-5 rounded-2xl bg-primary/5 border border-primary/15">
    <h3 class="font-extrabold text-lg mb-3 text-foreground">Important Note</h3>
    <p class="text-muted-foreground leading-relaxed">Useful warning or advice.</p>
</div>

Comparison table:
<div class="overflow-x-auto rounded-2xl border border-primary/15">
    <table class="w-full text-left text-sm">
        <thead class="bg-primary/5 text-foreground">
            <tr>
                <th class="p-4 font-extrabold">Feature</th>
                <th class="p-4 font-extrabold">Option A</th>
                <th class="p-4 font-extrabold">Option B</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-primary/10 text-muted-foreground">
            <tr>
                <td class="p-4 font-bold text-foreground">Example</td>
                <td class="p-4">Detail</td>
                <td class="p-4">Detail</td>
            </tr>
        </tbody>
    </table>
</div>

Final box:
<div class="mt-12 p-6 rounded-2xl bg-primary/5 border border-primary/15">
    <h3 class="font-extrabold text-lg mb-3 text-foreground">Final Thoughts</h3>
    <p class="text-muted-foreground leading-relaxed">...</p>
</div>

Article structure:
- Start with one styled intro paragraph.
- Use 5 to 9 main <section class="mb-10"> blocks depending on article length.
- Use lists only when they make the article easier to scan.
- Use one note box only when there is a genuine warning or summary.
- Use one comparison table only when the topic actually needs comparison.
- End with the styled Final Thoughts box.

Here is my article/draft/notes:

[PASTE MY ARTICLE HERE]
```

## Example Output

```html
SEO Title:
Bet365 vs Betway: Which Platform Has Better Odds?

Slug:
bet365-vs-betway-better-odds

Meta Description:
Compare Bet365 and Betway by odds, market depth, account tolerance, withdrawals, and betting experience.

Category:
Bookmaker Comparisons

Tags:
Bet365, Betway, bookmaker comparison, betting odds, betting accounts, account restrictions, verified accounts

WordPress Body HTML:
<div class="space-y-10">
    <p class="text-lg text-muted-foreground leading-relaxed border-l-2 border-primary/40 pl-5 italic">Both Bet365 and Betway are major global bookmakers, but serious users usually care about more than brand name. The real comparison is odds value, market depth, withdrawal reliability, and how each platform treats active accounts over time.</p>

    <section class="mb-10">
        <h2 class="text-xl md:text-2xl font-extrabold mb-4 text-foreground">Odds Margin Comparison</h2>
        <p class="text-muted-foreground leading-relaxed">Bet365 is often stronger on mainstream football and cricket markets because its prices are usually sharper on high-volume events. Betway can still be competitive, especially on selected regional markets, but users should compare prices before assuming one platform is always better.</p>
    </section>

    <section class="mb-10">
        <h2 class="text-xl md:text-2xl font-extrabold mb-4 text-foreground">Market Depth and Coverage</h2>
        <p class="text-muted-foreground leading-relaxed">Bet365 usually wins on market depth. It offers broad coverage across football, tennis, cricket, horse racing, and live betting markets. Betway is simpler for many casual users, but it may not always match the same level of detail on every event.</p>
    </section>

    <section class="mb-10">
        <h2 class="text-xl md:text-2xl font-extrabold mb-4 text-foreground">Account Tolerance and Restrictions</h2>
        <p class="text-muted-foreground leading-relaxed">Account restrictions can happen on many betting platforms when an account shows unusual patterns, repeated winning behavior, or activity that triggers risk checks. Bet365 is widely known for strict account monitoring, while Betway can feel more flexible in some markets.</p>
        <p class="text-muted-foreground leading-relaxed">This does not mean either platform guarantees long-term account stability. Users should understand platform rules, verification requirements, and responsible account use before relying on any single bookmaker.</p>
    </section>

    <div class="p-5 rounded-2xl bg-primary/5 border border-primary/15">
        <h3 class="font-extrabold text-lg mb-3 text-foreground">Important Note</h3>
        <p class="text-muted-foreground leading-relaxed">No bookmaker account should be treated as guaranteed income. Betting always carries risk, and every platform can apply limits, checks, or restrictions according to its terms.</p>
    </div>

    <section class="mb-10">
        <h2 class="text-xl md:text-2xl font-extrabold mb-4 text-foreground">Which Platform Should You Choose?</h2>
        <ul class="space-y-3 text-muted-foreground leading-relaxed">
            <li><strong class="text-foreground">Choose Bet365</strong> if you want deeper markets, stronger live betting, and broad global coverage.</li>
            <li><strong class="text-foreground">Choose Betway</strong> if you prefer a simpler interface and easier navigation for casual betting.</li>
            <li><strong class="text-foreground">Compare both</strong> if odds value and long-term account use matter more than brand preference.</li>
        </ul>
    </section>

    <div class="mt-12 p-6 rounded-2xl bg-primary/5 border border-primary/15">
        <h3 class="font-extrabold text-lg mb-3 text-foreground">Final Thoughts</h3>
        <p class="text-muted-foreground leading-relaxed">Bet365 is usually stronger for market depth and advanced betting options, while Betway can be easier for users who want a simpler experience. The better choice depends on your preferred sports, account needs, payment options, and how much control you want over live markets.</p>
    </div>
</div>
```

## Quick Rules

- Put the post title in WordPress title field.
- Paste only the WordPress Body HTML into the post editor content area.
- Do not include an H1 in the body.
- Do not output plain paragraphs without classes.
- Keep every paragraph styled with `text-muted-foreground leading-relaxed`.
- Keep every H2 styled with `text-xl md:text-2xl font-extrabold mb-4 text-foreground`.
- Keep the file and generated output clean, direct, and paste-ready.
