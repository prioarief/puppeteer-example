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
				nama_konsumen: 'Adam Jaya',
				outlet_name: 'Adam Jaya',
				area_name: 'East Java 1',
				distributor_name: 'Banten Rubiarta',
				nama_rekening: 'Adam Jaya',
				outlet_id: '100000-ANA047',
				cabang: 'Tanjung Duren',
				kota: 'Jakarta Barat',
				nama_bank: 'Bank Central Asia',
				month_target: '5.000.000.000',
				target_sales: '5.000.000.000',
				mbd: 'MAXI',
				ektp: '1212121222221211',
				npwp: '1212121222221211',
				alamat1: 'ini alamat',
				alamat2: 'ini alamat',
				kelurahan: 'Tanjung Duren Selatan',
				kecamatan: 'Grogol',
				kabupaten: '-',
				peserta: 'Existing'
			};

			const templatePath = Path.resolve('path', 'to', 'invoice.html');
			const content = await ReadFile('./print_formulir.html', 'utf8');

			// compile and render the template with handlebars
			const template = Handlebars.compile(content);

			return template(data);
		} catch (error) {
			console.log(error);
			throw new Error('Cannot create invoice HTML template.');
		}
	}

	async pdf(filename) {
		const html = await this.html();

		const browser = await Puppeteer.launch();
		const page = await browser.newPage();
		await page.setContent(html);

		await page.pdf({ path: `./files/${filename}.pdf`, format: 'a4' });

		return await browser.close();
	}
}

module.exports = Invoice
// (async () => {
// 	const inst = new Invoice();
// 	await inst.pdf();
// })();
