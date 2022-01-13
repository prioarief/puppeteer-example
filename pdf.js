const Fs = require('fs');
const Path = require('path');
const Util = require('util');
const Puppeteer = require('puppeteer');
const Handlebars = require('handlebars');
const ReadFile = Util.promisify(Fs.readFile);

class Invoice {
	async html() {
		try {
			const data = {
				name: 'Prio Arief Gunawan',
				invoice_id: '272husubb',
				total: 250000,
				due_date: '23 May 2022',
				invoice_details: [
					{ description: 'Ini deskkripsi', amount: '20000' },
					{ description: 'Ini deskkripsi 2', amount: '20000' },
				],
			};

			const templatePath = Path.resolve('path', 'to', 'invoice.html');
			const content = await ReadFile('./invoice.html', 'utf8');

			// compile and render the template with handlebars
			const template = Handlebars.compile(content);

			return template(data);
		} catch (error) {
			console.log(error);
			throw new Error('Cannot create invoice HTML template.');
		}
	}

	async pdf() {
		const html = await this.html();

		const browser = await Puppeteer.launch();
		const page = await browser.newPage();
		await page.setContent(html);

		await page.pdf({ path: 'hn.pdf', format: 'a4' });

		return await browser.close();
	}
}

(async () => {
	const inst = new Invoice();
	await inst.pdf();
})();
