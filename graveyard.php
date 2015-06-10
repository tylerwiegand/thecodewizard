<!--			</div>-->
<!--			<div class="row">-->
<!--				<div class="col-md-4 text-justify">-->
<!--					<div class="wrapper">-->
<!--						<img src="img/work.jpg" alt="people working" class="img-responsive img-thumbnail" />-->
<!--						<div class="overlay">-->
<!--							<h1>work</h1>-->
<!--						</div>-->
<!--					</div>-->
<!--					Lova tyelka Gayaerea Waenen ro. Nae saian luume' amin utue ta amin lava ona-->
<!--					ta a'amin. Khelek hurro' yulma ten' lemar en' templa amin sinta lle kwentra-->
<!--					lye i'narn. Yala onna khelek hurro' Tincokemen templa pilini'. Cormamin lindua-->
<!--					ele lle Aratoamin Sulime Yavannie. Quella tuulo' elea Nandaror Ithil'quessir-->
<!--					tula sinome. Yulma ten' lemar en' templa quel du asca melloneamin Tincokemen.-->
<!--					Llie n'vanima ar' lle atara lanneina lle naa curucuar atost en' entula orme-->
<!--					tampa tanya!-->
<!--				</div>-->
<!--				<div class="paragraph-breaker hidden-md hidden-lg"></div>-->
<!--					<div class="col-md-4 text-justify">-->
<!--						<div class="wrapper">-->
<!--							<img src="img/play.jpg" alt="people playing" class="img-responsive img-thumbnail" />-->
<!--							<div class="overlay">-->
<!--								<h1>play</h1>-->
<!--							</div>-->
<!--						</div>-->
<!--					Lle ume quel kwentra lye i'narn Lirimaerea heru en amin. Dinaerea entula-->
<!--					a' moinayamen' aa' menealle nauva calen ar' malta Gorgaerea. Neuma en'-->
<!--					templa quanta yassen 'kshapsa arwen en amin Guinahiroo. Rah'edan uuma-->
<!--					dela Aratoamin amin naa lle nai. Quella tuulo' elea rina istorlle sinome-->
<!--					khelek hurro' cormamin niuve tenna' ta elea lle au'. Ona ta a'amin nai-->
<!--					uuvanimo turamin Yallume amin n'rangwa edanea. Lle merna salk aa' menle-->
<!--					nauva calen ar' ta hwesta e' ale'quenle tanya nae n'quel Lotesse.-->
<!--				</div>-->
<!--				<div class="paragraph-breaker hidden-md hidden-lg"></div>-->
<!--				<div class="col-md-4 text-justify">-->
<!--					<div class="wrapper">-->
<!--						<img src="img/cast.jpg" alt="wizard casting FIREBALL" class="img-responsive img-thumbnail" />-->
<!--						<div class="overlay">-->
<!--							<h1>cast</h1>-->
<!--						</div>-->
<!--					</div>					Lle ume quel kwentra lye i'narn Lirimaerea heru en amin. Dinaerea entula-->
<!--					a' moinayamen' aa' menealle nauva calen ar' malta Gorgaerea. Neuma en'-->
<!--					templa quanta yassen 'kshapsa arwen en amin Guinahiroo. Rah'edan uuma-->
<!--					dela Aratoamin amin naa lle nai. Quella tuulo' elea rina istorlle sinome-->
<!--					khelek hurro' cormamin niuve tenna' ta elea lle au'. Ona ta a'amin nai-->
<!--					uuvanimo turamin Yallume amin n'rangwa edanea. Lle merna salk aa' menle-->
<!--					nauva calen ar' ta hwesta e' ale'quenle tanya nae n'quel Lotesse.-->
<!--				</div>-->
<!--			</div>-->
<!--			<section class="container-fluid">-->
<!--				<div class="row"><h2 class="col-xs-12 col-md-12 text-nowrap text-left">First Section</h2></div>-->
<!--				<div class="row">-->
<!--					<div class="col-md-6 code-block code-faded pre-scrollable text-nowrap">-->
<!--						<pre><code>-->
<!--//   1. Clients requests page with file handle to a temp file.-->
<!--//   2. Utility converts the page, save it to the file and reply.-->
<!--//-->
<!--// All these steps work sequentially, so no data should be accessed-->
<!--// simultaneously by several threads.-->
<!--class PdfToEmfUtilityProcessHostClient-->
<!--: public content::UtilityProcessHostClient {-->
<!--public:-->
<!--PdfToEmfUtilityProcessHostClient(-->
<!--base::WeakPtr<PdfToEmfConverterImpl> converter,-->
<!--const PdfRenderSettings& settings);-->
<!---->
<!--void Start(const scoped_refptr<base::RefCountedMemory>& data,-->
<!--const PdfToEmfConverter::StartCallback& start_callback);-->
<!---->
<!--void GetPage(int page_number,-->
<!--const PdfToEmfConverter::GetPageCallback& get_page_callback);-->
<!---->
<!--void Stop();-->
<!---->
<!--// UtilityProcessHostClient implementation.-->
<!--virtual void OnProcessCrashed(int exit_code) override;-->
<!--virtual void OnProcessLaunchFailed() override;-->
<!--virtual bool OnMessageReceived(const IPC::Message& message) override;-->
<!---->
<!--private:-->
<!--class GetPageCallbackData {-->
<!--MOVE_ONLY_TYPE_FOR_CPP_03(GetPageCallbackData, RValue);-->
<!---->
<!--public:-->
<!--GetPageCallbackData(int page_number,-->
<!--PdfToEmfConverter::GetPageCallback callback)-->
<!--: page_number_(page_number), callback_(callback) {}-->
<!---->
<!--// Move constructor for STL.-->
<!--GetPageCallbackData(RValue other) { this->operator=(other); }-->
<!---->
<!--// Move assignment for STL.-->
<!--GetPageCallbackData& operator=(RValue rhs) {-->
<!--page_number_ = rhs.object->page_number_;-->
<!--callback_ = rhs.object->callback_;-->
<!--emf_ = rhs.object->emf_.Pass();-->
<!--return *this;-->
<!--}-->
<!---->
<!--int page_number() const { return page_number_; }-->
<!--const PdfToEmfConverter::GetPageCallback& callback() const {-->
<!--return callback_;-->
<!--}-->
<!--ScopedTempFile emf() { return emf_.Pass(); }-->
<!--void set_emf(ScopedTempFile emf) { emf_ = emf.Pass(); }-->
<!---->
<!--private:-->
<!--int page_number_;-->
<!--PdfToEmfConverter::GetPageCallback callback_;-->
<!--ScopedTempFile emf_;-->
<!--};-->
<!--!-->
<!--						</code></pre>-->
<!--					</div>-->
<!--					<div class="paragraph-breaker hidden-md hidden-lg"></div>-->
<!--					<div class="col-md-6 text-justify">-->
<!--						Lle ume quel kwentra lye i'narn Lirimaerea heru en amin. Dinaerea entula-->
<!--						a' moinayamen' aa' menealle nauva calen ar' malta Gorgaerea. Neuma en'-->
<!--						templa quanta yassen 'kshapsa arwen en amin Guinahiroo. Rah'edan uuma-->
<!--						dela Aratoamin amin naa lle nai. Quella tuulo' elea rina istorlle sinome-->
<!--						khelek hurro' cormamin niuve tenna' ta elea lle au'. Ona ta a'amin nai-->
<!--						uuvanimo turamin Yallume amin n'rangwa edanea. Lle merna salk aa' menle-->
<!--						nauva calen ar' ta hwesta e' ale'quenle tanya nae n'quel Lotesse.-->
<!--					</div>-->
<!--				</div>-->
<!--			</section>-->