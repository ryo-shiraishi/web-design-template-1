import FadeInView from './FadeInView';

export default function About() {
  const services = [
    {
      title: '経営戦略コンサルティング',
      desc: '事業計画の策定から競合分析、組織体制の見直しまで、\n経営課題を多角的に整理し、実行力ある戦略を設計します。'
    },
    {
      title: '業務改善・DX推進',
      desc: '業務フローの可視化と改善提案、ITツールの導入支援を通じて、\n生産性向上と持続的成長を実現します。'
    },
    {
      title: '人材・組織開発',
      desc: '採用計画の設計、人事評価制度の構築、社員研修の企画・実施まで、\n強い組織づくりをトータルでサポートします。'
    }
  ];

  return (
    <section id="about" className="py-32 px-6 bg-brand-bg border-t border-brand-primary/20">
      <div className="max-w-7xl mx-auto">
        <div className="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 mb-20">
          <FadeInView>
            <div className="flex flex-col h-full justify-center">
              <h2 className="flex flex-col gap-2 mb-10">
                <span className="font-serif-en text-brand-primary text-sm tracking-[0.2em] uppercase">About</span>
                <span className="font-serif-jp text-brand-text text-3xl font-medium tracking-widest">事業概要</span>
              </h2>
              
              <h3 className="font-serif-jp text-2xl md:text-3xl leading-relaxed text-brand-text mb-8">
                「お客様の課題を、自分ごととして考える」
                <br />
                それが私たちの仕事の原点です。
              </h3>

              <div className="text-brand-muted text-sm md:text-base leading-[2] tracking-wider space-y-6">
                <p>
                  私たちは、2015年の創業以来、中小企業・スタートアップ・個人事業主を中心に、経営戦略・組織設計・業務改善など幅広いコンサルティングサービスを提供してきました。
                </p>
                <p>
                  規模や業種を問わず、クライアントが直面する課題は千差万別です。私たちは、画一的な手法に頼ることなく、クライアントの実情に寄り添い、現場目線で実行可能な解決策を提案・実行支援します。
                </p>
                <p>
                  創業から約10年。スタッフ総勢20名のチームで、「信頼される伴走者」として、今日もクライアントとともに歩んでいます。
                </p>
              </div>
            </div>
          </FadeInView>

          <FadeInView delay={0.2} className="relative aspect-square lg:aspect-auto lg:h-full">
            <img 
              src="https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&w=1500&q=80" 
              alt="Consulting Team" 
              className="w-full h-full object-cover filter grayscale opacity-80 hover:grayscale-0 hover:opacity-100 transition-all duration-700" 
            />
          </FadeInView>
        </div>

        <div className="grid grid-cols-1 md:grid-cols-3 gap-8">
          {services.map((service, index) => (
            <FadeInView key={service.title} delay={index * 0.2}>
              <div className="h-full bg-brand-surface p-8 border-l border-brand-primary hover:-translate-y-2 transition-transform duration-500">
                <h4 className="font-serif-jp text-lg text-brand-text mb-6 pb-4 border-b border-brand-border">
                  {service.title}
                </h4>
                <p className="text-brand-muted text-sm leading-relaxed tracking-wider whitespace-pre-line">
                  {service.desc}
                </p>
              </div>
            </FadeInView>
          ))}
        </div>
      </div>
    </section>
  );
}
